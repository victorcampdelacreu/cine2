<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINEMA</title>
    <?php
    include 'common/css.php';
    require('funciones.php');
    $a= 'CINEMA';
    $return ='index-1.php';
    barra($a,$return);
    ?>
   
</head>

<body class="body">
      
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3">
                <div class="row mt-2">

                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="en_informacion.php">INFORMACION</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="en_cine.php">CINEMA</a>
                    </div>
                    <div class="col-lg-12 mb-2 col-6">
                        <a class="btn btn-block boton btn-warning" href="administracion.php">ADMINISTRACION</a>
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