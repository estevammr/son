/* PAI */

function Address() {
  var number = 0;
  var city = '';
  var address = '';
}

Address.prototype.setNumber = function(_number) {
  number = _number;
};

Address.prototype.getNumber = function() {
  return number;
};

Address.prototype.setCity = function(_city) {
  city = _city;
};

Address.prototype.getCity = function() {
  return city;
};

Address.prototype.setAddress = function(_address) {
  address = _address;
};

Address.prototype.getAddress = function() {
  return address;
};

/* FILHA */

function Person() {
  var name = '';
  var age = 0;
}

Person.prototype = new Address();
Person.prototype.constructor = Person;

Person.prototype.getName = function() {
  return name;
};

Person.prototype.setName = function(_name) {
  name = _name;
};

Person.prototype.getAge = function() {
  return age;
};

Person.prototype.setAge = function(_age) {
  age = _age;
};


var estevam = new Person();

estevam.setName('Estevam');
estevam.setAge(27);
estevam.setCity('Marilia');
estevam.setAddress('Rua Inconfidencia');
estevam.setNumber(165);

console.log(estevam.getName(), estevam.getAge(), estevam.getAddress(), estevam.getNumber(), estevam.getCity());
