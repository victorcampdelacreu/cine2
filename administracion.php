<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion-control usuario</title>
    <?php
    include 'common/css.php';
    ?>
    <!--<link rel="stylesheet" href="estilos1.css">-->

</head>

<body>
    <?php
    require 'funciones.php';
    $a = "ADMINISTRACION login";
    $return= 'index.php';
    barra($a,$return);
    ?>
    <div class="container-fluid">

    <div class="col-lg-3">
        <div class="row mt-2">

                <form action="control_usuario.php" method="POST">
                    <div class="row mt-4">

                        <div class="col-lg-12 mb-3">
                            <label for="email" class="form-label">EMAIL</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="titleHelp">
                        </div>

                        
                        <div class="col-lg-12">
                            <label for="pass" class="form-label">CLAVE</label>
                            <input name="pass" type="password" class="form-control">
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-primary">ACEPTAR</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    </div>