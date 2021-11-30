<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada manual Espectadores</title>
    <?php
    include 'common/css.php';
    ?>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <?php
    $a= 'ENTRADA DATOS ESPECTADORES';
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
    <!-- Formulario para insertar los espectadores -->

    <form class = "formulario" action="insertar_espectadores.php" method="POST">
        <input required type="text" name="nombre" placeholder="entre su nombre" />
        <input required type="text" name="DNI" placeholder="entre su DNI" />
        <input required type="text" name="tarjeta" placeholder="entre la tarjeta de pago" />
        <button class = "botonEnviar" type="submit">Enviar</button>
    </form>

    <br><br>

    <?php
        if(isset($_GET['mensaje'])){ //recibe el mensaje de regitrar_espectadores
            echo $_GET['mensaje'];
        }
    ?>
    
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
    
</body>

</html>