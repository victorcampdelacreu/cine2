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
            $sala = buscar_sala($sala_id);
            
            $nombreSala = $sala['nombre'];
            $numFilas= $sala['numFilas'];
            $numColumnas=$sala['numColumnas'];
                        
            $mapas = listar_mapas();
            echo "<table>";
                while ($mapa = mysqli_fetch_array($mapas)){
                
                    
                        if ($mapa['sala_id'] == $sala_id){                      
                            
                            if($n<$mapa['fila']){
                                echo'</tr>';
                                $n=$n+1;

                            }           
                                        $zona=$mapa['zona'];
                                        $butaca=$mapa['butaca'];                                   
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