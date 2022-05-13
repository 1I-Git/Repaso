<?php

//Condicional if
if (true) {
    printf("Condicion valida");
} else {
    printf("Condicion no valida");
}


//Condicional switch

$color = 'rojo';

switch ($color) {
    case 'azul':
        printf("Color Azul");
        break;

    case 'rojo':
        printf("Color Azul");
        break;
}

//Bucle while
$a = 0;
while ($a <= 3) {
    print($a);
    $a ++;
}
//Bucle do...while
do {
    print("Se ejecuta 1 vez");
} while (false);

//Bucle for
$arr = [1,2,3,4,5];

for ($i=0; $i < sizeof($arr) ; $i++) { 
    print($arr[$i]);
}
//Bucle for each

foreach($arr as $x){
    print($x);
}
