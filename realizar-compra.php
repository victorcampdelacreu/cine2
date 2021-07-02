<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar entradas</title>
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
    <?php
        // este programa trae los datos de cada butaca comprada y los inserta en "compras", luego vuelve a "comprar_entradas
        $fecha=$_GET['fecha'];
        $sala_id = $_GET['sala_id'];
        $pelicula_id = $_GET['pelicula_id'];
        $sesion = $_GET['sesion'];
        $horaInicio = $_GET['horaInicio'];
        $fila = $_GET['fila'];
        $columna = $_GET['columna'];
        $zona = $_GET['zona'];
        $butaca = $_GET['butaca'];
        $cartelera_id=$_GET['cartelera_id'];

        require('funciones.php');
        

        $p= buscar_precio($sala_id,$zona,$sesion);
        $precio= $p['precioButaca'];
       
        insertar_compra($fecha,$sala_id,$pelicula_id,$sesion,$horaInicio,$fila,$butaca,$precio,$cartelera_id);
        
        header("Location: comprar_entradas.php?id=".$cartelera_id."&fecha=".$fecha."");
    ?>
    
            
        




</body>

</html>

