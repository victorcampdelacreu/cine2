<?php

require('funciones.php');

//entrada datos peliculas
$nombre =$_POST['nombre'];
$link =$_POST['link'];


$insertado = insertar_pelicula($nombre, $link);

header("Location: en_peliculas.php");