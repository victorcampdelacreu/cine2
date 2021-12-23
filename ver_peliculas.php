<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver peliculas</title>
    <?php
    include 'common/css.php';
    ?>
   
</head>

<body>
<?php
include 'common/css.php';
require('./funciones.php');
$a= 'VER PELICULAS';
$return='en_cine.php';
barra($a,$return);
?>

 

    <br><br>
    <!-- tabla para que salgan listados los datos ya entrados-->
    <table class="tabla">
        <thead>
            <tr>
                <td>ID</td>
                <td>Pelicula</td>
                <td>Link</td>
                <td>Opcion</td>
                
            </tr>
        </thead>
        <tbody>
            <?php
           
            $peliculas = listar_peliculas();
           
            ?>
            <!--************************************************-->
             <form action="" method="POST">
                
                
            <?php
            while ($pelicula = mysqli_fetch_array($peliculas)) {
                echo '<tr>';
                echo '<td>' . $pelicula['id'] . '</td>';
                echo '<td>' . $pelicula['nombre'] . '</td>';
                echo '<td>' . $pelicula['link'];
                $link=$pelicula['link'];
                            

                
                echo '<td><a href="ver_imagen.php?id='. $pelicula['id'] .'&link='.$link. '">Ver imagen</a> </td>';
                echo '</tr>';           
            }               
            ?>
            </form>
        </tbody>
    </table>
    <br>
    
</body>

</html>