<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['usuario'];
if($varsesion = null || $varsession = '')
{
    echo 'Usted no Tiene Autorizacion';
    die();
}

session_destroy();
header("location:../index.html")

?>

