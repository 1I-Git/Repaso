window.onload = function () {
  const datos = {
    nombre: "",
    email: "",
    mensaje: "",
  };

  //Seleccionar elementos
  const nombre = document.querySelector("#nombre");
  const email = document.querySelector("#email");
  const mensaje = document.querySelector("#mensaje");

  //Asociar evento input
  nombre.addEventListener("input", guardarDatos);
  email.addEventListener("input", guardarDatos);
  mensaje.addEventListener("input", guardarDatos);

  //Guardar datos
  /*
  Se le pasa un evento(input). 
  e.taget.id --->recupera el id del input
  e.taget.value--->recupera el valor del input
  datos[e.target.id] = e.target.value; ---> Guarda en datos el valor del input.
  */
  function guardarDatos(e) {
    //console.log(e.target.id); mostrar id de los inputs seleccionados
    datos[e.target.id] = e.target.value;
  }

  //Agregar evento Submit
  document
    .querySelector(".formulario")
    .addEventListener("submit", function (e) {
      e.preventDefault(); //Evitar submit
      const { nombre, email, mensaje } = datos;
      //Validar Formulario

      if (nombre === "" || email === "" || mensaje === "") {
        verError("Campos obligatorios");
        return; //cortar ejecucion del codigo
      }
      enviado("Enviado correctamente");
    });

  //Errores
  function verError(mensaje) {
    const error = document.createElement("p");
    error.textContent = mensaje;
    error.classList.add("error");
    document.querySelector(".formulario").appendChild(error);

    //Eliminar mensaje de error
    setTimeout(() => {
      error.remove(); //Elimina elementos del html
    }, 5000);
  }

  //Enviado
  function enviado(mensaje) {
    const succes = document.createElement("p");
    succes.textContent = mensaje;
    succes.classList.add("error");
    document.querySelector(".formulario").appendChild(succes);

    //Eliminar mensaje de error
    setTimeout(() => {
      succes.remove(); //Elimina elementos del html
    }, 5000);
  }
};
