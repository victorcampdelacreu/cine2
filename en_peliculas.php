<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <?php
    include 'common/css.php';
    ?>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php
    $a= 'ENTRADA PELICULAS';
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
                            <a href="en_administracion.php" class="btn btn-danger float-right"><?php echo $z; ?></a>
                            <!-- 0nclick=window.print() es para imprimir-->
                            <a onclick="window.print()" href="#" class="btn btn-primary float-right mr-2"><?php echo $p; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!----------------------------------------------------------------->
    <!-- Formulario para insertar las peliculas -->

    <form class = "formulario" action="insertar_peliculas.php" method="POST">
        <input required type="text" name="nombre" placeholder="entre nombre de la pelicula" />
        <input required type="text" name="link" placeholder="entre el enlace con caratula" />
        <button class = "botonEnviar" type="submit">Enviar</button>
    </form>

    <br><br>
    <!-- tabla para que salgan listados los datos ya entrados-->
    <table class="tabla">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>LINK</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            require('./funciones.php');
            $peliculas = listar_peliculas();
            ?>

            <?php
            while ($pelicula = mysqli_fetch_array($peliculas)) {
                echo '<tr>';
                echo '<td>' . $pelicula['id'] . '</td>';
                echo '<td>' . $pelicula['nombre'] . '</td>';
                echo '<td>' . $pelicula['link'] . '</td>';
                
                           
                // para eliminar una pelicula
                echo '<td><a href="">Editar</a>&nbsp;&nbsp;&nbsp; <a href="eliminar_peliculas.php?id=' . $pelicula['id'] . '">Eliminar</a> </td>';
                echo '</tr>';
            }
            ?>

        </tbody>
    </table>
    <br>
    <div class="cajas">
            <h2>
                <a class="enlaces" href="en_administracion.php">Ir a admiistracion</a>
            </h2>
        </div>
</body>

</html>