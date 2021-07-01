<?php

require('funciones.php');

//entrada datos mapas
$fecha =$_POST['fecha'];
$sala_id =$_POST['sala_id'];
$pelicula_id =$_POST['pelicula_id'];
$sesion =$_POST['sesion'];
$horaInicio =$_POST['horaInicio'];
$fila =$_POST['fila'];
$poblacion =$_POST['butaca'];
$precio =$_POST['precio'];
$cartelera_id =$_POST['cartelera_id'];

modificar_compra($fecha,$sala_id,$pelicula_id,$sesion,$horaInicio,$fila,$butaca,$precio,$cartelera_id);


header("Location: emitir_entradas.php");