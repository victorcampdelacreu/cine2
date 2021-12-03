<?php
require 'funciones.php';


$email = $_POST['email'];
$pass = $_POST['pass'];
$usuario = buscar_usuario($email);

if ($usuario['email']=$email and $usuario['pass']=$pass and $usuario['rol']=1){
    header('Location: en_administracion.php?mensaje= ');
    
}
else{
    echo 'USUARIO NO AUTORIZADO';
    header('Location: index.php?mensaje= Usuario no autorizado');

}



?>