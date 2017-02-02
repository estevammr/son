var express = require('express');
var router = express.Router();
var request = require('request');
var cheerio = require('cheerio');


router.get('', (req, res, next) => {
  
  let options = {
    url: 'https://www.boavistaservicos.com.br',
    method: 'GET'
  };

  request(options, (error, response, body) => {
    if(error || response.statusCode != 200) return;
    
    let $ = cheerio.load(body);
    let arr = [];
    let tagA = $('a');

    $(tagA).each(function(i, item) {

      let href = $(item).attr('href');
      return arr.push({
        url: href
      });
    });

    res.status(200).json(arr);
  });
});

module.exports = router;
