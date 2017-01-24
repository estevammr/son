function Person() {
  this.name = '';
  this.age = 0;
  var tatoo = 0;

  var swim = function() {
    return console.log('I`m swimming');
  };

  this.move = function(canSwim) {
    if (canSwim) {
      return swim();
    }
    return console.log('I`m walking');
  };  
}

var estevam = new Person();

console.log(estevam);

estevam.move(); //walking
estevam.move(true); //swimming
estevam.move(false); //walking