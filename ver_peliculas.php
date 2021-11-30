<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver peliculas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php
include 'common/css.php';
$a= 'VER PELICULAS';
$z = 'RETURN';
$p = 'PRINT';
?>
<!-- Barra RETURN ----->
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="alert alert-info" role="alert">
                <div class="row">
                    <div class="col-lg-6">
                        <h2><?php echo $a; ?></h2>
                    </div>

                    <div class="col-lg-6">
                        <a href="en_cine.php" class="btn btn-danger float-right"><?php echo $z; ?></a>
                        <!-- 0nclick=window.print() es para imprimir-->
                        <a onclick="window.print()" href="#" class="btn btn-primary float-right mr-2"><?php echo $p; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!----------------------------------------------------------------->
 

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
            require('./funciones.php');
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