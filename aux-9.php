<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precios</title>
    <?php
    include 'common/css.php';
    ?>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php
    $a= 'ENTRADA PRECIOS';
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
    <!-- Formulario para insertar los precios -->

    <form class = "formulario" action="insertar_precios.php" method="POST">
        <input required type="text" name="sala_id" placeholder="entre la sala" />
        <input required type="text" name="zona" placeholder="entre la zona" />
        <input required type="text" name="sesion" placeholder="entre la sesion" />
        <input required type="text" name="precioButaca" placeholder="entre precio de la butaca" />
        

        <button class = "botonEnviar" type="submit">Enviar</button>
    </form>

    <br><br>
    <!-- tabla para que salgan listados los datos ya entrados-->
    <table class="tabla">
        <thead>
            <tr>
                <td>ID</td>
                <td>Sala</td>
                <td>Zona</td>
                <td>Sesion</td>
                <td>Precio Butaca</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            require('./funciones.php');
            $precios = listar_precios();
            ?>

            <?php
            while ($precio = mysqli_fetch_array($precios)) {
                echo '<tr>';
                echo '<td>' . $precio['id'] . '</td>';
                echo '<td>' . $precio['sala_id'] . '</td>';
                echo '<td>' . $precio['zona'] . '</td>';
                echo '<td>' . $precio['sesion'] . '</td>';
                echo '<td>' . $precio['precioButaca'] . '</td>';
                
               
                echo '<td><a href="">Editar</a>&nbsp;&nbsp;&nbsp; <a href="eliminar_precios.php?id=' . $precio['id'] . '">Eliminar</a> </td>';
                echo '</tr>';
            }
            ?>

        </tbody>
    </table>
    
</body>

</html>
                           
                