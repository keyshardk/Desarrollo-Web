<?php 

    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];

   if($varsesion = null || $varsession = '')
{
    echo 'Usted no Tiene Autorizacion';
    die();
}

	require 'funciones.php';

	$fotos_pagina = 60;

	$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p']: 1);
	$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_pagina - $fotos_pagina : 0;

	$conexion = conexion_bd('u604611936_inphoto', 'u604611936_pho', 'juegos15');

	if(!$conexion)
	{
		die();
	}


	$sqlFotos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM tbl_fotos where PK_idUsuario = '$_SESSION[usuario]' LIMIT $inicio, $fotos_pagina");

	$sqlFotos->execute();
	$fotos = $sqlFotos->fetchAll();

	if(!$fotos)
	{
		header('Location: fotos.php');
	}

	$sql = $conexion->prepare("SELECT FOUND_ROWS() AS total_filas");
	$sql->execute();
	$total_post = $sql->fetch()['total_filas'];

	$total_paginas = ceil($total_post / $fotos_pagina);

if (isset($_GET['Message'])) 
{
   
    header ("location:buscador.php");
   
}

	require "views/InicioPerfil.php"

 ?>