<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Entrada Cartelera</title>
</head>

<body>

    <!-- Formulario para insertar la cartelera -->

    <?php
    require('./funciones.php');

    $peliculas = listar_peliculas();
    $salas = listar_salas();
    ?>

    <h3>
        <?php
            if(isset($_GET['mensaje'])){
                echo $_GET['mensaje'];
            }
        ?>
    </h3>

    <form class="formulario" action="insertar_cartelera.php" method="POST">
        
        <input required type="date" name="fechaInicio" placeholder="entre la fecha inicio" />
        <input required type="date" name="fechaFinal" placeholder="entre la fecha final" />

        <select name="sala_id">
            <option>Seleccione sala</option>
            <?php
            while($sala = mysqli_fetch_array($salas)){?>
                <option value="<?php echo $sala['id']; ?>"><?php echo $sala['nombre']; ?></option>
            <?php } ?>
        </select>

        <input required type="text" name="sesion" placeholder="entre la sesion" />
        <input required type="text" name="horaInicio" placeholder="entre la hora inicio" />

        <select name="pelicula_id">
    
            <option>Seleccione pelicula</option>
            <?php
            while($pelicula = mysqli_fetch_array($peliculas)){?>
                <option value="<?php echo $pelicula['id']; ?>"><?php echo $pelicula['nombre']; ?></option>
            <?php } ?>
        </select>

        

        <button class="botonEnviar" type="submit">Enviar</button>
    </form>

    <br><br>


    <br>
    <div class="cajas">
        <h2>
            <a class="enlaces" href="en_administracion.php">Ir a administracion</a>
        </h2>
    </div>

</body>

</html>