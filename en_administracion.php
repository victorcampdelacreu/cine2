<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <?php
    include 'common/css.php';
    ?>
    
</head>

<body class="body">


    <?php
        require 'funciones.php';
        $a= "ADMINISTRACION";
        $return = 'index-1.php';
        barra($a,$return);
        ?>

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3">
                    <div class="row mt-2">

                        <div class="col-lg-12 mb-2 col-6">
                            <a class="btn btn-block boton btn-warning" href="en_peliculas.php">PELICULAS</a>
                        </div>
                        <div class="col-lg-12 mb-2 col-6">
                            <a class="btn btn-block boton btn-warning" href="en_salas.php">SALAS</a>
                        </div>
                        <div class="col-lg-12 mb-2 col-6">
                            <a class="btn btn-block boton btn-warning" href="en_mapas.php">MAPAS SALAS</a>
                        </div>
                        <div class="col-lg-12 mb-2 col-6">
                            <a class="btn btn-block boton btn-warning" href="en_precios.php">PRECIOS</a>
                        </div>
                        <div class="col-lg-12 mb-2 col-6">
                            <a class="btn btn-block boton btn-warning" href="en_cartelera.php">ENTRADA CARTELERA</a>
                        </div>
                        <div class="col-lg-12 mb-2 col-6">
                            <a class="btn btn-block boton btn-warning" href="en_cambio_fecha.php">CAMBIO FECHA</a>
                        </div>
                        <div class="col-lg-12 mb-2 col-6">
                            <a class="btn btn-block boton btn-warning" href="listado_espectadores.php">LISTADO ESPECTADORES</a>
                        </div>
                        


                    </div>


                </div>





            </div>

        </div>

        <?php
        include 'common/js.php';
        ?>























</body>

</html>