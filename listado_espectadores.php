<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Espectadores</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

 

    <br><br>
    <!-- tabla para que salgan listados los datos ya entrados-->
    <table class="tabla">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>DNI</td>
                <td>Tarjeta</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            require('./funciones.php');
            $espectadores = listar_espectadores();
            ?>

            <?php
            while ($espectador = mysqli_fetch_array($espectadores)) {
                echo '<tr>';
                echo '<td>' . $espectador['id'] . '</td>';
                echo '<td>' . $espectador['nombre'] . '</td>';
                echo '<td>' . $espectador['DNI'] . '</td>';

                echo '<td>' . $espectador['tarjeta'] . '</td>';
                
                           
                // para eliminar un espectador
                echo '<td><a href="">Editar</a>&nbsp;&nbsp;&nbsp; <a href="eliminar_espectadores.php?id=' . $espectador['id'] . '">Eliminar</a> </td>';
                echo '</tr>';
            }
            ?>

        </tbody>
    </table>
    <br>
    <div class="cajas">
            <h2>
                <a class="enlaces" href="en_administracion.php">Ir a Administracion</a>
            </h2>
        </div>
</body>

</html>