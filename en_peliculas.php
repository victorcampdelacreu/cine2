<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

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
                <a class="enlaces" href="en_administracion.php">Ir a adinistracion</a>
            </h2>
        </div>
</body>

</html>