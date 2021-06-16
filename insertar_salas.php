<?php

require('funciones.php');

//entrada datos salas
$nombre =$_POST['nombre'];
$direccion =$_POST['direccion'];
$poblacion =$_POST['poblacion'];
$numFilas =$_POST['numFilas'];
$bumColumnas=$_POST['numColumnas'];




$insertado = insertar_sala($nombre, $direccion, $poblacion, $numFilas, $numColumnas);

header("Location: en_salas.php");