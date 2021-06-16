<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Espectadores</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- Formulario Registro espectadores -->

    <form class = "formulario" action="registrar_espectadores.php" method="POST">
        <input required type="text" name="DNI" placeholder="entre su DNI" />    
        <input required type="text" name="nombre" placeholder="entre su nombre y apellidos" />   
        <input required type="text" name="tarjeta" placeholder="entre la tarjeta de pago" />
        <button class = "botonEnviar" type="submit">Enviar</button>
    </form>

    <br><br>

    <?php
        if(isset($_GET['mensaje'])){ //recibe el mensaje de regitrar_espectadores
            echo $_GET['mensaje'];
        }
    ?>

    <br>
  
    <br>
    <div class="cajas">
            <h2>
                <a class="enlaces" href="en_cine.php">Ir a cine</a>
            </h2>
        </div>
</body>

</html>