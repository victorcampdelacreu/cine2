<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar entradas</title>
    <?php
    include 'common/css.php';
    ?>
</head>

<body>
    <?php
    require 'funciones.php';
    $a = "COMPRAR ENTRADAS";
    $return = 'ver_cartelera.php';
    barra($a, $return);
    ?>

    <!--muestra leyenda "seleccione asiento!"-->
    <div class="cajas">
        <h2>
            <a class="enlaces">Elija asientos</a>
        </h2>
    </div>
    <br>
    <div class="cajas">
        <h2>
            <a class="enlaces" href="pago.php">Ir a pago entradas</a>
        </h2>
    </div>
    <?php
    // este programa permite al espectador elegir butacas de la sala y pelicula seleccionada en "ver_cartelera"

    $id = $_GET['id'];  //comprobado y llega bien el id de cartelera
    $fecha = $_GET['fecha'];

    $peliculas = listar_peliculas();
    $sala = listar_salas();
    $cartelera = listar_cartelera();
    $mapas = listar_mapas();

    // traer fila cartelera
    $cartelera = listar_cartelera($id);
    $seleccion = mysqli_fetch_array($cartelera);

    while ($seleccion = mysqli_fetch_array($cartelera)) {
        if ($id == $seleccion['id']) {
            // trae los datos de cartelera
            $sala_id = $seleccion['sala_id'];
            $sesion = $seleccion['sesion'];
            $horaInicio = $seleccion['horaInicio'];
            $pelicula_id = $seleccion['pelicula_id'];
        }
    }


    // muestra mapa sala
    $n = 0;
    $m = 0;
    echo "<table>";
    while ($mapa = mysqli_fetch_array($mapas)) {

        if ($mapa['sala_id'] == $sala_id) {
            $sala = buscar_sala($sala_id);
            $numFilas = $sala['numFilas'];
            $numColumnas = $sala['numColumnas'];


            if ($n < $numFilas) {

                $fila = $mapa['fila'];
                $columna = $mapa['columna'];
                $zona = $mapa['zona'];
                $butaca = $mapa['butaca'];
                $m = $m + 1;

                $data = "fecha=$fecha&sala_id=$sala_id&pelicula_id=$pelicula_id&sesion=$sesion&horaInicio=$horaInicio&fila=$fila&columna=$columna&zona=$zona&butaca=$butaca&cartelera_id=$id";

                // comprobar si ya se compro ************************
                $c = 0;
                $c = comprobar_compra($fecha, $sala_id, $sesion, $fila, $butaca);


                if ($c != 0) { // indica que y esta ocupada


                    echo "<td class= 'mapaSala4'>" . $butaca . '</td>';
                } else {
                    if ($zona == 1) {
                        echo "<td class= 'mapaSala1'><a href='realizar-compra.php?$data'>" . $butaca . "</a></td>";
                    }
                    if ($zona == 2) {
                        echo "<td class= 'mapaSala2'><a href='realizar-compra.php?$data'>" . $butaca . "</a></td>";
                    }
                    if ($zona == 3) {
                        echo "<td class= 'mapaSala3'><a href='realizar-compra.php?$data'>" . $butaca . "</a></td>";
                    }
                    if ($m == $numColumnas) {
                        $m = 0;
                        $n = $n + 1;
                        echo "<tr>";
                    }
                }
            }
        }
    }
    echo "</table>";





    ?>

    


</html>