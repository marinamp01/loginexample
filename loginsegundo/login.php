<?php
session_start();
include "datos/usuarios.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{


if(isset($_REQUEST['usuario']) and isset($_REQUEST['password']))
{
    $usuario=$_REQUEST['usuario'];
    $password=$_REQUEST['password'];

    if(isset($usuarios[$usuario]) and $usuarios[$usuario]['password'])
    {

        $_SESSION['usuario']=$usuarios[$usuario];
        //$_SESSION['nombre']=$usuario;
        header('Location: principal.php');
        exit;
    }else
    {
        $_SESSION['error']='Usuario y/o contraseña incorrectos';
    }
}
else
 {
    $_SESSION['error']='Falta el usuario y/o contraseña';
    
 }
}
header('Location: index.php');
?>