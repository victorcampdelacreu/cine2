<?php

require('funciones.php');

//entrada datos salas
$nombre =$_POST['nombre'];
$direccion =$_POST['direccion'];
$poblacion =$_POST['poblacion'];
$numFilas =$_POST['numFilas'];
$numColumnas=$_POST['numColumnas'];
$lateral=$_POST['lateral'];
$fondo=$_POST['fondo'];




$insertado = insertar_sala($nombre, $direccion, $poblacion, $numFilas, $numColumnas, $lateral, $fondo);

header("Location: en_salas.php");