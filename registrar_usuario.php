

<?php

require 'funciones.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$rol = $_POST['rol'];

$usuario = verificar_usuario($email);
if ($usuario->num_rows > 0){
    header('Location: input_users.php?mensaje=Usuario: '.$nombre.' ya existe');

}
else{
    $insertado = insertar_usuario($nombre,$email,$pass,$rol);
    header('Location: input_users.php?mensaje=Usuario: '.$nombre.' registrado');
}