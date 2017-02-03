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
  console.log(`Mongoose error => ${err}`);
});


server.route({
  method: 'GET',
  path: '/url',
  handler: (req, reply) => {
    horseman
      .open('http://www.boavistaservicos.com.br/')
      .evaluate(function() {  
        $ = window.$ || window.jQuery;

        var data = [];
        
        $('a').each(function(index, el) {
          
          var url = $(el).attr('href');
          
          data.push({
            url: url
          });
        });

        return data;
      })
      .then(function(res) {
        Urls.insertMany(res)
          .then((urls) => {
            console.log(`OK`);
            return reply(res);
          })
          .catch((err) => {
            console.log(`Error => ${err}`);
            reply({
              'error': 'MongoDB'
            });
          });
      })
      .catch((err) => {
        console.log(`There is an error => ${err}`);
      })
      .close();
  }
});

server.start((err) => {
  if (err) throw err;
  console.log(`Your hapi server is running => ${server.info.uri}`);
});