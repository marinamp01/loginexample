<?php 
session_start(); 

//SI NO ESTÁ LOGADO
if(!isset($_SESSION['usuario']))
{
    //Redirigimos al index
    header('Location: index.php');
}

$titulo="Principal";
$html="html/principal.php";
include "html/plantilla.php";
?>




