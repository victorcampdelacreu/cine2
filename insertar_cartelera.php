<?php

require('funciones.php');

//entrada datos pcartelera
$fechaInicio =$_POST['fechaInicio'];
$fechaFinal =$_POST['fechaFinal'];
$sala_id=$_POST['sala_id'];
$sesion=$_POST['sesion'];
$horaInicio=$_POST['horaInicio'];
$pelicula_id=$_POST['pelicula_id'];



$insertado = insertar_cartelera($fechaInicio,$fechaFinal,$sala_id,$sesion,$horaInicio,$pelicula_id);

header("Location: en_cartelera.php");