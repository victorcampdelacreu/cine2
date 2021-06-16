<?php

require('funciones.php');
$id= $_GET['id'];

eliminar_mapa($id);

header("location: en_mapas.php");