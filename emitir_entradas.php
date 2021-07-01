<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emitir entradas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
    require('funciones.php');
    $i = 0;
    $tabla = $_POST['tabla'];
    $tabla = explode(",", $tabla); ?>

    <table border="1">
        <thead>
            <tr>
            <td>ID</td>
            <td>Fecha</td>
            <td>Sala</td>
            <td>Sesion</td>
            <td>Hora inicio</td>
            <td>Pelicula</td>
            <td>Fila</td>
            <td>Butaca</td>
            <td>Precio</td>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($tabla as $compra_id) {
                // busca compra, pone cartelera_id=0 e imprime entrada
                $id = $compra_id;
                $compra = buscar_compra($id);
                $cartelera_id = 0;
                modificar_compra($compra['id'], $compra['fecha'], $compra['sala_id'], $compra['pelicula_id'], $compra['sesion'], $compra['horaInicio'], $compra['fila'], $compra['butaca'], $compra['precio'], $cartelera_id);
                
                $sala = buscar_sala($compra['sala_id']);
                $pelicula = buscar_pelicula($compra['pelicula_id']);

                echo '<tr>';
                echo '<td>' . $compra['id'] . '</td>';
                echo '<td>' . $compra['fecha'] . '</td>';
                echo '<td>' . $sala['nombre'] . '</td>';
                echo '<td>' . $compra['sesion'] . '</td>';
                echo '<td>' . $compra['horaInicio'] . '</td>';
                echo '<td>' . $pelicula['nombre'] . '</td>';
                echo '<td>' . $compra['fila'] . '</td>';
                echo '<td>' . $compra['butaca'] . '</td>';
                echo '<td>' . $compra['precio'] . '</td>';
                echo '</tr>';
            } ?>

        </tbody>
    </table>

    <br><br>
    <div class="cajas">
        <h2>
            <a class="enlaces" href="en_cine.php">Ir a cine</a>
        </h2>
    </div>



</body>