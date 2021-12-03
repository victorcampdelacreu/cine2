<?php

require 'funciones.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$usuario = verificar_login($email,$pass);


if($usuario != ""){
    session_start();
    $_SESSION['email'] = $email;

    header("Location: index-1.php");
}else{
    
    header("Location: index.php?mensaje=Error de usuario y contraseña");
}