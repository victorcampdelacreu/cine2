<?php

require('funciones.php');

//entrada datos mapas

$nombre =$_POST['sala_id'];
$direccion =$_POST['fila'];
$direccion =$_POST['columna'];
$poblacion =$_POST['butaca'];
$numAsientos =$_POST['zona'];

$insertado = insertar_mapa($sala_id, $fila, $columna, $butaca, $zona);

header("Location: en_mapas.php");