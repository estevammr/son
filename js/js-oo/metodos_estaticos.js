function Pen() {
  this.color = '';

  this.getColor = function() {
    return this.color;
  };

  this.setColor = function(_color) {
    this.color = _color;
  };
}

/* ESTÁTICO */

Pen.manufacturer = '';

Pen.setManufacturer = function(_manufacturer) {
  this.manufacturer = _manufacturer;
};

Pen.getManufacturer = function() {
  return this.manufacturer;
};

Pen.setManufacturer('Bic');
console.log(Pen.getManufacturer());

/* INSTANCIANDO, NÃO SERÁ POSSÍVEL ACESSAR POIS OS MÉTODOS SÃO ESTÁTICOS */
var pen = new Pen();

console.log(pen.getManufacturer());