const Horseman = require('node-horseman');
const horseman = new Horseman();

horseman
  .open('http://www.boavistaservicos.com.br/')
  .click('a[href]')
  .waitForNextPage()
  .count('strong.normal')
  .then(function(status, counter) {
    console.log(`Count attributes => ${counter}`);
  })
  .catch((err) => {
    console.log(`There is an error => ${err}`);
  })
  .close();