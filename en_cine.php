<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
    
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
<?php
    require('./funciones.php');
   
    
    $a= 'CINE';
    $return='index-1.php';
    barra($a,$return);
    ?>

<div class="container-fluid">

<div class="row">
    <div class="col-lg-3">
        <div class="row mt-2">

            <div class="col-lg-12 mb-2 col-6">
                <a class="btn btn-block boton btn-warning" href="registro_espectadores.php">REGISTRO ESPECTADORES</a>
            </div>
            <div class="col-lg-12 mb-2 col-6">
                <a class="btn btn-block boton btn-warning" href="ver_cartelera.php">VER CARTELERA</a>
            </div>
            <div class="col-lg-12 mb-2 col-6">
                <a class="btn btn-block boton btn-warning" href="ver_mapas.php">VER MAPAS SALAS</a>
            </div>
            <div class="col-lg-12 mb-2 col-6">
                <a class="btn btn-block boton btn-warning" href="ver_peliculas.php">VER PELICULAS</a>
            </div>
            
            


        </div>


    </div>


</body>

</html>