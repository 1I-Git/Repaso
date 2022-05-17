//importa la función que exporta suma.js y la almacena en la constante add. Ya pude llamar a esa función
const add = require("./script");


//el bloque describe permite agrupar varios tests relacionados bajo un mismo nombre
describe("Addition", ()=>{
    //cada sentencia test es un test que se realizará
    test("dado 4 y 6, devolvería 10", ()=>{
        const expected = 10;
        const actual = add(4,6);
        expect(actual).toEqual(expected);
    });

    test('dado -4 y 2, devolvería -2', () => {
        const expected = -2;
        const actual = add(-4,2);
        expect(actual).toEqual(expected)
    });
});