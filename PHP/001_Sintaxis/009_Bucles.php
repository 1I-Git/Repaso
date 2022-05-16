<?php

// While

$i = 0; // Inicializador

while ($i < 10) {

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While
$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while ($i < 10);


//Bucle for
$arr = [1, 2, 3, 4, 5];

for ($i = 0; $i < sizeof($arr); $i++) {
    print($arr[$i]);
}
echo '<br>';
//Bucle for each

foreach ($arr as $x) {
    print($x);
}
echo '<hr>';
//Ejemplo
$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$" . $producto['precio']; ?> </p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No Disponible';  ?> </p>
    </li>
<?php
}
