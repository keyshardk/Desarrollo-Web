<?php 

	require "funciones.php";

	$conexion = conexion_bd('u604611936_inphoto', 'u604611936_pho', 'juegos15');


	if(!$conexion)
	{
		die();
	}

	$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

	if (!$id) {
		header('Location: fotos.php');
	}

	$sqlFoto = $conexion->prepare("SELECT * FROM tbl_fotos WHERE PK_idFoto = :id");
	$sqlFoto->execute(array(':id' => $id));

	$foto = $sqlFoto->fetch();

	if(!$foto)
	{
		header('Location: fotos.php');
	}

	require "views/foto.view.php";
 ?>