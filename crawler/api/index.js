'use strict';

const Hapi = require('hapi');
const mongoose = require('mongoose');
const Horseman = require('node-horseman');

const server = new Hapi.Server({ debug: { request: ['error', 'timestamp'] } });
server.connection({
    port: 3004
});

const db = mongoose.connect('mongodb://localhost/crawler').connection;
const horseman = new Horseman();
const Urls = require('./urls');

db.on('error', (err) => {
    console.log(`Mongoose Error = ${err}`);
});

server.route({
  method: 'GET',
  path: '/urls',
  handler: (req, reply) => {
    console.time()
      Urls.find({}, (err, results) => {
        if (!err && results.length) {
          console.timeEnd();
          return reply({
          data: results,
            count: results.length
          });
        }
        
        if (!err && !results.length) {
          console.time();
          return horseman
            .open('http://www.boavistaservicos.com.br')
            .evaluate(function() {
              $ = window.$ || window.jQuery;
              
              var urls = [];
              
              $('a').each(function(index, el) {
                var url = $(el).attr('href');
                urls.push({
                  url: url
                });
              });
              return urls;
            })
            .then(function(res) {
              Urls.insertMany(res)
              .then((urls) => {
                console.log(`Ok`);
                console.timeEnd();
                return reply(res);
              })
              .catch((err) => {
                console.log(`Can not insert: ${err}`);
                reply({
                  'error': 'MongoDB'
                });
              });
            })
            .catch(function(err) {
              console.log(err)
            })
            .close();
        }
      })
    }
})

server.start((err) => {
    if (err) {
        throw err;
    }

    console.log(`Your hapi server has been ignite at: ${server.info.uri}`);
});