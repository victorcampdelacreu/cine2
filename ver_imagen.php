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
include 'common/css.php';
$a= 'VER IMAGEN PELICULA';
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

<?php
    require('funciones.php');
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