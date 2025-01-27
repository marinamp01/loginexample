<?php 
session_start(); 

//SI NO ESTÁ LOGADO
if(!isset($_SESSION['usuario']))
{
    //Redirigimos al index
    header('Location: index.php');
}

include "datos/clientes.php";

$titulo="Clientes";
$html="html/clientes.php";
include "html/plantilla.php";
?>
