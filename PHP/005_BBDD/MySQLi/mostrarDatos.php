<?php

$url = "localhost";
$user = "root";
$pass = "root";
$bbdd = "pruebaddbb";

$mysqli = new mysqli($url, $user, $pass, $bbdd);

/* verificar la conexión */
if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}

$consulta = "SELECT * FROM clientes";

if ($resultado = $mysqli->query($consulta)) {

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
        printf("%s (%s)\n", $fila["nombre"], $fila["apellido"]);
    }

    /* liberar el conjunto de resultados */
    $resultado->free();
}

/* cerrar la conexión */
$mysqli->close();
