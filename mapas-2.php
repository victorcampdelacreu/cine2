<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapas</title>
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
    <?php
    require('./funciones.php');
    $mapas = listar_mapas();
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input required type="text" name="sala_id" placeholder="entre el ID de la sala" />
        <button name="formularioSala" class="botonEnviar" type="submit">Enviar</button>
    </form>

    <?php
        if(isset($_POST['formularioSala'])){
            
            $n = 0;
            $m = 0;
            $sala_id = $_POST['sala_id'];
            $salas = buscar_sala($sala_id);
            $sala = mysqli_fetch_array($salas);
            $n = $sala['numFilas'];
            $m = $sala['numColumnas'];            
            
            //calcula el numero de butaca para cada fila-colunma y asigna la zona
            // n = numFilas, m= numColumnas  -->
          
            $i = 0;
            $j = 0;
    
            
            echo "<table>";
            for ($i = 0; $i < $n; $i++) {
                echo "<tr>";               
                
                for ($j = 0; $j < $m ; $j++) {
                    $f = $i+1;
                    $c = $j+1;
                    $zona = calculo_zona($f, $c, $n, $m);
                    $butaca = calculo_butaca($c, $m);
                    if ($zona==1){

                        echo "<td class= 'mapaSala1'>".$butaca.'</td>';
                        
                        
                    }
                   
                    if ($zona==2){
                        echo "<td class= 'mapaSala2'>".$butaca.'</td>';
                        

                    }
                    if ($zona==3){
                        echo "<td class= 'mapaSala3'>".$butaca.'</td>';
                        
                    }
                    
                }

                echo "<tr>";  
            }
            echo "</table>";
           
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