<?php

require('funciones.php');
$id= $_GET['id'];

eliminar_sala($id);

header("location: en_salas.php");