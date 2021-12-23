<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Espectadores</title>
    <?php
    include 'common/css.php';
    ?>
</head>

<body>
    <?php
    require 'funciones.php';
    $a= 'REGISTRO ESPECTADORES';
    $return='en_cine.php';
    
    barra($a,$return);   
    ?>
    
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
    
</body>

</html>