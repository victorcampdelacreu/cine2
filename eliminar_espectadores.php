<?php

require('funciones.php');
$id= $_GET['id'];

eliminar_espectador($id);

header("location: en_espectadores.php");