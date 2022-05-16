<?php

//Post
/*
-$_POST['nombre'];
-$GET['nombre']
-$_REQUEST['nombre']
*/

if (isset($_POST['nombre']) || isset($_POST['idiomas'])) {

    $nombre = $_POST['nombre'];
    $idiomas = $_POST['idiomas'];

    switch ($idiomas) {
        case 'chino':
            echo "歡迎 : " . $nombre;
            break;

        case 'ingles':
            echo "Welcome : " . $nombre;
            break;

        case 'castellano':
            echo "Bienvenido : " . $nombre;
            break;
    }
} else {
    echo "Faltan datos";
}


//Get
// $nombre2 = $_GET['nombre2'];
// echo 'Hola ' . $nombre2;