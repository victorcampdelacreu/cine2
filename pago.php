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
$espectador = listar_espectadores();

if(isset($_GET['mensaje'])){
    echo $_GET['mensaje'];
}

if(isset($_GET['mensajeTarjeta'])){
    echo $_GET['mensajeTarjeta'];
}

?>



<br><br>
<!-- tabla con las entradas pedidas para confirmar-->
<table class="tabla">
    <thead>
        <tr>
            <td>ID</td>
            <td>Sala</td>
            <td>Sesion</td>
            <td>hora inicio</td>
            <td>pelicula</td>
            <td>fila</td>
            <td>butaca</td>
            <td>precio</td>
        </tr>
    </thead>
    <tbody>

        <?php
        $i = 0;
        $tabla = array();

        $importe = 0;
        $i = 0;
        $compras = listar_compras();

        while ($compra = mysqli_fetch_array($compras)) {
            if ($compra['cartelera_id'] > 0) { // indica que no se ha pagado y emitido aun
                $sala = buscar_sala($compra['sala_id']);
                $pelicula = buscar_pelicula($compra['pelicula_id']);
                echo '<tr>';
                echo '<td>' . $compra['id'] . '</td>';
                echo '<td>' . $sala['nombre'] . '</td>';
                echo '<td>' . $compra['sesion'] . '</td>';
                echo '<td>' . $compra['horaInicio'] . '</td>';
                echo '<td>' . $pelicula['nombre'] . '</td>';
                echo '<td>' . $compra['fila'] . '</td>';
                echo '<td>' . $compra['butaca'] . '</td>';
                echo '<td>' . $compra['precio'] . '</td>';
                $importe = $importe + $compra['precio'];
                $tabla[] = $compra['id'];
                $i = $i + 1;
            }
        }
        
        
        ?>
    </tbody>

</table>

<h2><b>Total importe: <?php echo $importe;?>€</b></h2>

<br><br>

<!-- entrar DNI o tarjeta -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input  type="text" name="DNI" placeholder="Si está registrado entre DNI, sino entre tarjeta" />
    <input  type="text" name="tarjeta" placeholder="Entre su numero tarjeta" />
    <button name="formularioEspectador" class="botonEnviar" type="submit">Enviar</button>
</form>


<?php
if (isset($_POST['formularioEspectador'])) {
    // busca la tarjeta del espectador
    $DNI = $_POST['DNI'];
    
    if ($DNI != "") {
        $n=comprobar_espectador($DNI);
        
            
         if($n>0){
            $tarjeta = buscar_tarjetaEspectador($DNI);    
        }
         else{
           
            header("Location: http://localhost/cine/pago.php?mensaje=El DNI: ".$DNI." no existe");    
        }
        
        

    } else {
        // toma el numero de tarjeta que se ha introducido
        $tarjeta = $_POST['tarjeta'];
        // verifica que tarjeta tiene 16 digitos (ver registrar espectadores)
        $tam = strlen($tarjeta); // calcula el num caracteres de la tarjeta
        
        
        if ($tam != 16) {
                        
            header("Location: http://localhost/cine/pago.php?mensajeTarjeta=El número de tarjeta debe de tener 16 caracteres");
        }
    }
}
?>



<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input required type="text" name="confirmar" placeholder="Confirmar= 1, rechazar= 0" />
    <button name="formularioConfirmar" class="botonEnviar" type="submit">Enviar</button>
</form>

<?php

if (isset($_POST['confirmar'])) {  
    $confirmar = $_POST['confirmar'];  
    if ($confirmar == 1) { ?>
        <br><br>
        <!-- instrucciones para enviar la tabla (implode - explode -->
        <form action="emitir_entradas.php" method="POST">
            <input type="hidden" value="<?php echo implode(",", $tabla) ?>" name="tabla">
            <button style="width: 120px;" type="submit" class="botonEnviar">Emitir Entradas</button>
        </form>

        <br>
   
   <?php } else {
        // eliminar los registros de compras
        for ($i = 0; $i < 20; $i++) {
            //eliminar la compra ***********************************************
            $id = $tabla[$i];
            eliminar_compra($id);
        }
        header("Location: pago.php");
    }
    
}

?>

<br><br>
<div class="cajas">
    <h2>
        <a class="enlaces" href="en_cine.php">Ir a cine</a>
    </h2>
</div>
</body>

</html>