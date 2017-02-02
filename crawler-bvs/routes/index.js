var express = require('express');
var router = express.Router();
var request = require('request');
var cheerio = require('cheerio');

router.get('', (req, res, next) => {
  
  var options = {
    url: 'https://www.boavistaservicos.com.br',
    method: 'GET'
  };

  request(options, (error, response, body) => {
    if(error || response.statusCode != 200) return;
    
    var $ = cheerio.load(body);
    var arr = [];
    var tagA = $('a');
    //var classNormal = $('h3');

    $(tagA).each(function(i, item) {

      var href = $(item).attr('href');
      return arr.push({
        url: href
        // info: {
        //   phones: $(normal).text()
        // }
      });
    });

    res.status(200).json(arr);
  });
});

module.exports = router;
