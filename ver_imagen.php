<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver imagen</title>
    <?php
    include 'common/css.php';
    ?>
   
</head>

<body>
<?php
include 'common/css.php';
require('funciones.php');
$a= 'VER IMAGEN PELICULA';
$return='en_cine.php';


    
    $link = $_GET['link'];
    $pelicula_id = $_GET['id'];
    
    $text = buscar_pelicula($pelicula_id);
    $nombre = $text['nombre'];
    $titulo = 'El titulo de la pelicula es:  ';
   
 

    // diseño página con imagen
    echo "<table>";
    echo "<td class = 'cuadro2'>".$titulo."</td>";
    echo "<tr>";
    echo "<td class = 'cuadro2'>".$nombre."</td>";
    
    echo "<td><img class='cuadro' src='img/".$link."' width='200'/></td>";

    

    echo "</table>";
?>

<br><br>
    

</body>
</html>