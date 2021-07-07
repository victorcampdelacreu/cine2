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

            <?php
            while ($pelicula = mysqli_fetch_array($peliculas)) {
                echo '<tr>';
                echo '<td>' . $pelicula['id'] . '</td>';
                echo '<td>' . $pelicula['nombre'] . '</td>';
                echo '<td>' . $pelicula['link'];
                $link=$pelicula['link'];
                
                //<form action="ver_imagen.php" method="POST">
                echo '<td><a href=""><a href="ver_imagen.php?id=' . $link . '">Ver imagen</a> </td>';
                //</form>
                
                echo '</tr>';           
            }               
                            ?>

        </tbody>
    </table>
    <br>
    <div class="cajas">
            <h2>
                <a class="enlaces" href="en_cine.php">Ir a cine</a>
            </h2>
        </div>
</body>

</html>