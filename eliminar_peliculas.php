<?php

require('funciones.php');
$id= $_GET['id'];

eliminar_pelicula($id);

header("location: en_peliculas.php");