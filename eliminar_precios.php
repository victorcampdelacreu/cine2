<?php

require('funciones.php');
$id= $_GET['id'];

eliminar_precio($id);

header("location: en_precios.php");