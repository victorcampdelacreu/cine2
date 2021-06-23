<?php

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


$precio= buscar_precio($sala_id,$zona,$sesion);


echo $fecha . ' - '.$sala_id . ' - '. $pelicula_id . ' - '.$sesion . ' - '.$horaInicio . ' - '.$fila . ' - '.$columna . ' - '.$zona. ' - '.$butaca. ' - ' .$precio .' -'. $cartelera_id;

// busca precio



insertar_compra($fecha,$sala_id,$pelicula_id,$sesion,$horaInicio,$fila,$butaca,$precio,$cartelera_id);


