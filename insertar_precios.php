<?php

require('funciones.php');


$sala_id =$_POST['sala_id'];
$clase =$_POST['zona'];
$sesion =$_POST['sesion'];
$precioButaca =$_POST['precioButaca'];



$insertado = insertar_precio($sala_id, $zona, $sesion, $precioButaca);

header("Location: en_precios.php");