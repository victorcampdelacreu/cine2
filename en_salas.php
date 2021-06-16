<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    
    <!-- Formulario para insertar las salas-->
    <form class="formulario" action="insertar_salas.php" method="POST">
        <input required type="text" name="nombre" placeholder="entre nombre de la sala" />
        <input required type="text" name="direccion" placeholder="entre la direccion" />
        <input required type="text" name="poblacion" placeholder="entre la poblacion" />
        <input required type="text" name="numFilas" placeholder="entre el numero de filas" />
        <input required type="text" name="numColumnas" placeholder="entre el numero de columnas" />
        
        <button class="botonEnviar" type="submit">Enviar</button>
    </form>

    <br><br>
    <!-- tabla para que salgan listados los datos ya entrados-->
    <table class="tabla">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Direccion</td>
                <td>Poblacion</td>
                <td>Num Filas</td>
                <td>Num Columnas</td>
                <td>Mapa</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            require('./funciones.php');
            $salas = listar_salas();
            ?>
            
            <?php
            while ($sala = mysqli_fetch_array($salas)) {
                echo '<tr>';
                echo '<td>' . $sala['id'] . '</td>';
                echo '<td>' . $sala['nombre'] . '</td>';
                echo '<td>' . $sala['direccion'] . '</td>';
                echo '<td>' . $sala['poblacion'] . '</td>';
                echo '<td>' . $sala['numFilas'] . '</td>';
                echo '<td>' . $sala['numColumnas'] . '</td>';
               

                echo '<td><a href="editar_sala.php?id=' . $sala['id'] . '">Editar</a>&nbsp;&nbsp;&nbsp; <a class="eliminar" href="eliminar_salas.php?id=' . $sala['id'] . '">Eliminar</a> </td>';
                echo '</tr>';
            }
            ?>

        </tbody>
    </table>
    <br>
    <div class="cajas">
        <h2>
            <a class="enlaces" href="en_administracion.php">Ir a administracion</a>
        </h2>
    </div>

</body>

</html>