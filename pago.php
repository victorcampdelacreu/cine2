<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    <link rel="stylesheet" href="estilos.css">
</head>

</body>
    <?php
        // este programa pregunta al espectador si esta registrado o no. Si no lo está pide una tarjeta para pago
        // muestra todas las butacas reservadas "comprar_entradas --> realizar_compra" y pregunta si confirma o no
        // en el caso de confirmar se emitiran las entradas "emitir_entradas", sino se eliminaran las reservas
        require('./funciones.php');
        
        $salas = listar_salas();
        $cartelera = listar_cartelera();
        $pelicula = buscar_pelicula($p);
        $espectador = listar_espectadores();
        $tarjeta = buscar_tarjetaEspectador($p);        
 
    ?>
    
    <!-- entrar DNI o tarjeta -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input required type="text" name="DNI" placeholder="Si está registrado entre DNI, sino entre tarjeta" />
            <input required type="text" name="tarjeta" placeholder="Entre su numero tarjeta" />
            <button name="formularioEspectador" class="botonEnviar" type="submit">Enviar</button>
        </form>
        
        <?php
            if(isset($_POST['formularioEspectador'])){

                $DNI=$_POST['DNI'];
                if ($DNI>0){
                    
                    $tarjeta = buscar_tarjetaEspectador($DNI);
                    // si no encuentra espectador, lanzar mensaje de error

                }
                else{
                    $tarjeta = $POST['tarjeta']; 
                    // verifica que tarjeta tiene 16 digitos (ver registrar espectadores)
                    $tam = strlen($tarjeta); // calcula el num caracteres de la tarjeta

                    if ($tam != 16) {
                         header("Location: http://localhost/cine/registro_espectadores.php?mensaje=El número de tarjeta debe de tener 16 caracteres");
}   
                     }
            }
        ?>
        <!-- tabla con las entradas pedidas para confirmar-->
                <table class="tabla">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Sala</td>
                            <td>Sesion</td>
                            <td>hora inicio</td>
                            <td>pelicula</td>
                            <td>hora fila</td>
                            <td>hora butaca</td>
                            <td>hora precio</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                        $i=0;
                        for ($i=0; $i<20; $i++){
                            $tabla[$i]=0;
                        }
                        
                        $importe=0;
                        $i=0;
                        while ($compra = mysqli_fetch_array($compras)) {
                            if($compra['cartelera_id']>0){ // indica que no se ha pagado y emitido aun
                                $sala = buscar_sala($compra['sala_id']);
                                $pelicula = buscar_pelicula($compra['id']);
                                echo '<tr>';
                                echo '<td>' . $compra['id'] . '</td>';
                                echo '<td>' . $sala['nombre'] . '</td>';
                                echo '<td>' . $compra['sesion'] . '</td>';
                                echo '<td>' . $compra['horaInicio'] . '</td>';
                                echo '<td>' . $pelicula['nombre'] . '</td>';
                                echo '<td>' . $compra['fila'] . '</td>';
                                echo '<td>' . $compra['butaca'] . '</td>';
                                echo '<td>' . $compra['precio'] . '</td>';
                                $importe=$importe + $compra['precio'];
                                $tabla[$i] =$compra['id'];
                                $i=$i+1;
                            }               
                        }
                        echo '<td>' . $importe . '</td>';
                    ?>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input required type="text" name="confirmar" placeholder="Confirmar entre 1, rechazar entre 0" />
                    <button name="formularioConfirmar" class="botonEnviar" type="submit">Enviar</button>
                    </form>

                    <?php
                        $confirmar=$_POST['confirmar'];
                        if ($confirmar ==1){
                        
                        echo '<td><a href="emitir_entradas.php?id=' . $tabla .'">Emitir entradas</a> </td>';
                        echo '</tr>';
                        }
                        else{
                            // eliminar los registros de compras
                            for ($i=0;$i<20;$i++){
                                if($i>0){
                                    //eliminar la compra ***********************************************
                                    $id=$tabla[$i];
                                    "eliminar_compra php?id= . $id . ";
                                }

                            }
                        }

                    ?>
            <br><br>   
            <div class="cajas">
            <h2>
                <a class="enlaces" href="en_cine.php">Ir a cine</a>
            </h2>
    </div>

        </tbody>
    </table>
</body>

</html>




      