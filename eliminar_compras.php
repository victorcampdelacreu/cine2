<?php

require('funciones.php');
$id= $_GET['id'];

eliminar_compra($id);

header("location: pagos.php");