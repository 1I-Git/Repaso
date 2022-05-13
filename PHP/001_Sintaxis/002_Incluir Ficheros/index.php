<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir Ficheros</title>
</head>

<body>
    <?php
    //Separar la lógica de la presentación.

    /*
        Cuando estamos programando,
        siempre tenemos que hacer que cada fichero, clase, función... 
        se encarga de una sola cosa.

        Sentencias para incluir Ficheros:
        
        -include() Si existe o tiene errores el archivo seguira ejecutandose.
        -include_once()
        -requiere() Si existe o tiene errores el archivo NO seguira ejecutandose.
        -requiere_once() Si el archivo ya ha sido incluido no se incluye (require) de nuevo.
    */

    require_once("ejemplo.php");

    print($texto);

    ?>
</body>

</html>