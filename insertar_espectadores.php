<?php
// programa relacionado con en_espectadores //
require('funciones.php');

$tarjeta = $_POST['tarjeta'];
$tam = strlen($tarjeta); // calcula el num caracteres de la tarjeta

if ($tam != 16) {
    header("Location: http://localhost/cine/en_espectadores.php?mensaje=El número de tarjeta debe de tener 16 caracteres");
} else {
    
    $DNI = $_POST['DNI'];
    $existe_espectador = comprobar_espectador($DNI); //comprueba si ya existe

    if ($existe_espectador == 0) { // 0 indica que no existe espectador previamente
        $nombre = $_POST['nombre'];

        $insertado = insertar_espectador($nombre, $DNI, $tarjeta);
        header("Location: http://localhost/cine/en_espectadores.php?mensaje=Espectador insertado con el DNI: " . $DNI);
    } else { // ya existe el espectador

        header("Location: http://localhost/cine/en_espectadores.php?mensaje=espectador ya registrado con el DNI: " . $DNI);
    }
}