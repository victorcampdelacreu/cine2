<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Entrada Cartelera</title>

    <?php
    include 'common/css.php';
    ?>
</head>

<body>
<?php
        require 'funciones.php';
        $a= "CARTELERA";
        $return='en_administracion';
        barra($a,$return);
        ?>
   
    <!-- Formulario para insertar la cartelera -->

    <?php
    

    $peliculas = listar_peliculas();
    $salas = listar_salas();
    ?>

    <h3>
        <?php
        if (isset($_GET['mensaje'])) {
            echo $_GET['mensaje'];
        }
        ?>
    </h3>

    <div class="container">
        <form class="formulario" action="insertar_cartelera.php" method="POST">

            <div class="row mt-5">
                <div class="col-lg-4">
                    <input class="form-control" required type="date" name="fechaInicio" placeholder="entre la fecha inicio" />
                </div>
                <div class="col-lg-4">
                    <input class="form-control" required type="date" name="fechaFinal" placeholder="entre la fecha final" />
                </div>
                <div class="col-lg-4">
                    <select class="form-control" name="sala_id">
                        <option>Seleccione sala</option>
                        <?php
                        while ($sala = mysqli_fetch_array($salas)) { ?>
                            <option value="<?php echo $sala['id']; ?>"><?php echo $sala['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4">
                    <input  class="form-control" required type="text" name="sesion" placeholder="entre la sesion" />
                </div>
                <div class="col-lg-4">
                    <input class="form-control"  required type="text" name="horaInicio" placeholder="entre la hora inicio" />
                </div>
                <div class="col-lg-4">
                    <select  class="form-control" name="pelicula_id">

                        <option>Seleccione pelicula</option>
                        <?php
                        while ($pelicula = mysqli_fetch_array($peliculas)) { ?>
                            <option value="<?php echo $pelicula['id']; ?>"><?php echo $pelicula['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <button class="btn btn-primary btn-lg" class="botonEnviar" type="submit">Enviar</button>
                </div>
            </div>

        </form>
    </div>

    <br><br>


    <br>
    


    <?php
    include('js.php');
    ?>
</body>

</html>