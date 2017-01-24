//Abstract class Animal
var Animal = function() {
  throw 'This is an abstract class';
};

Animal.prototype.name = '';
Animal.prototype.sound = '';
Animal.prototype.say = function() {
  return console.log(this.name + ' Emit -> ' + this.sound);
};

var Cat = function() {
  this.name = 'cat';
  this.sound = 'meow';
};

Cat.prototype = Object.create(Animal.prototype);

console.log(new Cat().say());