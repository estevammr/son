function Person() {
  var name = '';
  var age = 0;

  this.getName = function() {
    return name;
  };

  this.setName = function(_name) {
    return name = _name;
  };

  this.getAge = function() {
    return age;
  };

  this.setAge = function(_age) {
    return age = _age;
  };
}

var estevam = new Person();

estevam.setName('Estevam');
console.log(estevam.getName());

estevam.setAge(27);
console.log(estevam.getAge());

console.log(estevam);

