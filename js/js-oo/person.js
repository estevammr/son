function Person() {
  this.name = '';
  this.age = '';
  this.eyesColor = '';
  this.body = '';

  this.move = function() {

  };

  this.say = function() {
    console.log("Hello say action");
  };

  this.see = function() {

  };
}

var estevam = new Person();

console.log(typeof Person); //function
console.log(typeof estevam);  //object


estevam.name = 'Estevam';
estevam.age = 27;
estevam.eyesColor = 'castanhos';
estevam.body = 'biiirlllll';
console.log(estevam);

estevam.say();