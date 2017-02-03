const Horseman = require('node-horseman');
const horseman = new Horseman();

horseman
  .open('http://www.boavistaservicos.com.br/')
  .click('a')
  .waitForNextPage()
  .then(function(status) {
    console.log(`${status}`);
  })
  .catch((err) => {
    console.log(`There is an error => ${err}`);
  })
  .close();