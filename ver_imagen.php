<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver imagen</title>
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>

<?php
    require('funciones.php');
    $link = $_GET['link'];

   

    // diseño página con imagen
    echo "<table>";

    echo "<td class= 'mapaSala1'>".$link.'</td>';

    

    echo "</table>";
?>

<br><br>
    <div class="cajas">
            <h2>
                <a class="enlaces" href="ver_peliculas.php">Ir a cine</a>
            </h2>
        </div>

</body>
</html>