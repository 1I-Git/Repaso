<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Post</h1>
    <form action="datos.php" method="post">
        <input name="nombre" type="text">


        <select name="idiomas" id="idiomas">
            <option value="chino">Chino</option>
            <option value="ingles">Ingles</option>
            <option value="castellano">Castellano</option>
        </select>

        <input type="submit" value="Enviar">
    </form>

    <!-- <h1>Get</h1>
    <form action="datos.php" method="get">
        <input name="nombre2" type="text">
        <input type="submit" value="Enviar">
    </form> -->
</body>

</html>