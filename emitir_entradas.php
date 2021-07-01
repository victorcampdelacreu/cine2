<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emitir entradas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
        require('funciones.php');
        $i=0;
        $tabla=$GET_['tabla'];
        if ($tabla[$i]>0){
            // busca compra, pone cartelera_id=0 e imprime entrada
            $id=$tabla[$i];
            $compras=buscar_compra($id);
            $compra = mysqli_fetch_array($compras);
            $compra['cartelera_id']=0;
            $compra=modificar_compra($fecha,$sala_id,$pelicula_id,$sesion,$horaInicio,$fila,$butaca,$precio,$cartelera_id);



        }
    ?>
        <br><br>   
            <div class="cajas">
            <h2>
                <a class="enlaces" href="en_cine.php">Ir a cine</a>
            </h2>
        </div>


    
</body>



