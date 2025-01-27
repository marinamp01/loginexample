<?php session_start();

//SI YA ESTÁ LOGADO
if(isset($_SESSION['usuario']))
{
//REDIRIGIMOSA AL PRINCIPIO
header('Location: principal.php');
}
//$titulo='Acceso';
//$html='html/index.php';
include 'html/index.php';
?>
