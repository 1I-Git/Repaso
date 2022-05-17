/*
Test para minimizar los fallos.
Nos permiten:
-comprobar que nuestro código responde como se espera de él.
-evitar los errores de regresión(fallos tras incluir una nueva funcionalidad).
-mejoran la documentación del proyecto ya que el test indica cómo debe funcionar mi código.

 tipos de tests:
 -unitarios: prueban un trozo de código que sólo hace una cosa
 -de integración: prueban que varias partes del código funcionan bien juntas
 -de aceptación: prueba que el código permite hacer algo que el cliente quiere

 test unitarios:
 -Preparación (Arrange): perparamos el código para poder probarlo, por ejemplo, creamos las variables u objetos a probar
 -Actuación (Act): realizamos la acción, por ejemplo, llamamos a la función
 -Aserción (Assert): comprobamos que el resultado es el esperado


 Pasos:

 npm init   (Para crear el proyecto)
 jest       (Para especificar la dependencia)

 "scripts": {
   "test": "jest"
}

instalar jest:
npm i --save-dev jest

O

npm i -g jest


Si ejecutamos los tests en la terminal (npm run test) muestra un error ya que Jest no sabe cómo gestionar las sentencias ECMAScript import y export. Para solucionarlo debemos transpilar nuestro código de manera que Jest pueda entenderlo. 
Podemos hacerlo de 2 maneras:

-instalando el transpilador Babel y configurando Jest para que transpile el código
-utilizando un bundler como Webpack. En este caso no sólo transpilamos el código sino que juntamos todos nuestros ficheros JS en uno sólo que será el que enlazaremos en el fichero HTML de nuestra aplicación. Es la solución si queremos que nuestro código funcione en el navegador además de poder pasar los tests.

//Babel
npm add jest babel-jest @babel/core @babel/preset-env

Y crear 2 ficheros para configurarlo y que sepa trabajar junto a Jest:

jest.config.json
{
  "transform": {
      "^.+\\.jsx?$": "babel-jest"
  }
}
.babelrc
{
  "presets": ["@babel/preset-env"]
}

*/
