<?php
require 'funciones.php';


$email = $_POST['email'];
$pass = $_POST['pass'];
$usuario = buscar_usuario($email);
$rol = (int)$usuario['rol'];
echo $usuario['email'],' ',$usuario['pass'],' ',$usuario['rol'],'       ';


if ($usuario['email']=$email && $usuario['pass']=$pass && $rol=1){
    echo $email,' ',$pass;
    echo die();
    header('Location: en_administracion.php?mensaje= ');
    
}
else{
    echo 'USUARIO NO AUTORIZADO';
    header('Location: index.php?mensaje= Usuario no autorizado');

}



?>