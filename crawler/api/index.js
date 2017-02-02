'use strict';

const Hapi = require('hapi');
const mongoose = require('mongoose');
const Horseman = require('node-horseman');

const server = new Hapi.Server();
server.connection({
  port: 3000
});

const db = mongoose.connect('mongodb://localhost/crawler').connection;
const horseman = new Horseman();

db.on('error', (err) => {
  console.log(`Mongoose error => ${err}`);
});

server.route({
  method: 'GET',
  path: '/url',
  handler: (req, replay) => {
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
        replay(res);
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