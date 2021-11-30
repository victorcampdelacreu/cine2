<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cartelera</title>

    <link rel="stylesheet" href="estilos.css">
</head>

</body>
<?php
    include 'common/css.php';
    $a= 'CARTELERA POR SALAS';
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








    <?php
        // este programa muestra la cartelera de una fecha determinada y permite elegir lo que se quiere comprar
        require('./funciones.php');
        $peliculas = listar_peliculas();
        $salas = listar_salas();
        $cartelera = listar_cartelera();
        
 
    ?>
    
    <!-- entrar fecha -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input required type="date" name="fecha" placeholder="entre la fecha" />
            <button name="formularioFecha" class="botonEnviar" type="submit">Enviar</button>
        </form>
        <br>
    
            <!-- tabla para que salga la cartelera-->
            <table class="tabla">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Sala</td>
                        <td>Sesion</td>
                        <td>Hora inicio</td>
                        <td>pelicula</td>
                        <td>Comprar</td>
                                    
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['formularioFecha'])){
                            $fecha=$_POST['fecha'];
                                                  
                                

                                while ($cartel = mysqli_fetch_array($cartelera)) {

                                    $fecha1 = $cartel['fechaInicio'];
                                    $fecha2 = $cartel['fechaFinal'];
                                    
                                    if ($fecha >= $fecha1 && $fecha<= $fecha2) {
                                                $p= $cartel['pelicula_id'];
                                                $pelicula = buscar_pelicula($p);
                                                echo '<tr>';
                                                echo '<td>' . $cartel['id'] . '</td>';                  
                                                echo '<td>' . $cartel['sala_id'] . '</td>';
                                                echo '<td>' . $cartel['sesion'] . '</td>';
                                                echo '<td>' . $cartel['horaInicio'] . '</td>';
                                                echo '<td>' . $pelicula['nombre']. '</td>';
                                                //opcion comprar entradas de esta pelicula, sesion y sala
                                                echo '<td><a href="comprar_entradas.php?id=' . $cartel['id'] . '&fecha='.$fecha.'">Comprar_entradas</a> </td>';
                                                echo '</tr>';
                                            }              
                                            
                                }
                            }            
                    ?>
                 </tbody>
                        
            </table>
            
        
        <br>    
        

</body>

</html>