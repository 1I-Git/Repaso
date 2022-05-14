//POO

//Objeto
let alumno = {
  nombre: "Juan",
  apellidos: "San Diego",
  edad: 50,
  getInfo: function () {
    return (
      "El alumno " +
      this.nombre +
      " " +
      this.apellidos +
      " tiene " +
      this.edad +
      "años"
    );
  },
};

//Clase

class Alumno {
  constructor(id, nombre, telefono) {
    this.id = id;
    this.nombre = nombre;
    this.telefono = telefono;
  }
  toString() {
    let ver = `Nombre: ${this.nombre} teléfono: ${this.telefono}`;
    return ver;
  }
}

let al = new Alumno(1, "juan", 654897231);
console.log(al.toString());

//herencia

class Notas extends Alumno {
  constructor(id, nombre, telefono, nota) {
    super(id, nombre, telefono);
    this.nota = nota;
  }

  verNota() {
    let ver = `Alumno: ${super.nombre} tiene una nota de : ${this.nota}`;
    return ver;
  }
}

let not = new Notas(al.nombre, 5);

console.log(not.verNota());
