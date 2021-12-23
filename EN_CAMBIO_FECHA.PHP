<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cartelera</title>
    <?php
    include 'common/css.php';
    ?>

</head>

</body>
<?php
require 'funciones.php';
$a = "CAMBIO FECHAS";
$return = 'en_administracion.php';
barra($a, $return);

// este programa muestra la cartelera de una fecha determinada y permite elegir lo que se quiere comprar

$peliculas = listar_peliculas();
$salas = listar_salas();
$cartelera = listar_cartelera();


?>

<!-- entrar fecha -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input required type="date" name="fechaInicio" placeholder="entre la fecha inicial" />
    <input required type="date" name="fechaFinal" placeholder="entre la fecha final" />
    <button name="formularioFecha" class="botonEnviar" type="submit">Enviar</button>
</form>
<tbody>
    <?php
    if (isset($_POST['formularioFecha'])) {
        $fechaInicio = $_POST['fechaInicio'];
        $fechaFinal = $_POST['fechaFinal'];


        while ($cartel = mysqli_fetch_array($cartelera)) {

            $id = $cartel['id'];
            $sala_id = $cartel['sala_id'];
            $sesion = $cartel['sesion'];
            $horaInicio = $cartel['horaInicio'];
            $pelicula_id = $cartel['pelicula_id'];
            $fecha1=$cartel['fechaInicio'];
            $fecha2=$cartel['fechaFinal'];

            echo $id,' - ',$sala_id,' - ',$pelicula_id,'----- ',$fechaInicio,' ',$fechaFinal,'-'.$fecha1,' ',$fecha2;
            echo '<br>';

            modificar_cartelera($cartel['id'],$fechaInicio, $fechaFinal, $cartel['sala_id'], $cartel['sesion'], $cartel['horaInicio'], $cartel['pelicula_id']);
        }
    }
    ?>
</tbody>







</body>

</html>