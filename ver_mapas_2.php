<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapas</title>
    <?php
        include 'common/css.php';
    ?>
</head>

<body>
    <?php
    include 'common/css.php';
    require('./funciones.php');
    $a = 'VER MAPAS SALAS';
    $return = 'en_cine.php';
    barra($a, $return);
    $mapas = listar_mapas();
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input required type="text" name="sala_id" placeholder="entre el ID de la sala" />
        <button name="formularioSala" class="botonEnviar" type="submit">Enviar</button>
    </form>
    <tbody>
        <?php
        if (isset($_POST['formularioSala'])) {
            echo "LLEGA";
            echo die();
            $n = 0; // contador filas
            $m = 0; // contador columnas

            $sala_id = $_POST['sala_id'];
            $sala = buscar_sala($sala_id);
            // controlar existencia sala
            
            $nombreSala = $sala['nombre'];
            $numFilas = $sala['numFilas'];
            $numColumnas = $sala['numColumnas'];

            $mapas = listar_mapas();
            echo "<table>";

            while ($mapa = mysqli_fetch_array($mapas)) {

                if ($mapa['sala_id'] == $sala_id) {

                    if ($n < $numFilas) {
                        
                        $zona = $mapa['zona'];
                        $butaca = $mapa['butaca'];
                        $m = $m + 1;

                        if ($zona == 1) {
                            echo "<td class= 'mapaSala1'>" . $butaca . '</td>';
                        }
                        if ($zona == 2) {
                            echo "<td class= 'mapaSala2'>" . $butaca . '</td>';
                        }
                        if ($zona == 3) {
                            echo "<td class= 'mapaSala3'>" . $butaca . '</td>';
                        }
                        if ($m == $numColumnas) {
                            $m = 0;
                            $n = $n + 1;
                            echo "<tr>";
                        }
                        
                    }
                }
            }
            echo "</table>";
        }
        


        ?>
    </tbody>

    <br><br>

</body>

</html>