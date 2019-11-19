<?php 
	
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];

   if($varsesion = null || $varsession = '')
{
    echo 'Usted no Tiene Autorizacion';
    die();
}
	require "funciones.php";
	
	$conexion = conexion_bd('u604611936_inphoto', 'u604611936_pho', 'juegos15');

	if(!$conexion)
	{
		//header('Location: error.php');
		die();
	}

	if( ($_SERVER['REQUEST_METHOD']=='POST') && (!empty($_FILES)) )
	{
		$check = @getimagesize($_FILES['foto']['tmp_name']);
		if ($check != false) {
		$carpeta_fotos = 'img/';
			$imagen_cargada = $carpeta_fotos . $_FILES['foto']['name'];
			move_uploaded_file($_FILES['foto']['tmp_name'], $imagen_cargada);

			$sqlInsertarFoto = $conexion->prepare('
				INSERT INTO tbl_fotos(PK_idUsuario, nombre_foto, descripcion_foto, ruta_foto, estado_foto, FK_idCategoria, filtro_foto)
				VALUES (:codigo, :nombre, :descripcion, :ruta, :estado, :categoria, :filtro)');

			$sqlInsertarFoto->execute(array(
				':codigo' => $_SESSION['usuario'],
				':nombre' => $_POST['titulo'],
				':descripcion' => $_POST['texto'],
				':ruta' => $_FILES['foto']['name'],
				':estado' => 1,
				':categoria' => $_POST['categoria'],
				':filtro' => $_POST['filtro'],

			));

			header('Location: fotos.php');
		}
		else
		{
			$error = "El archivo no es una imagen o no es soportado";
		}
	}

	require "views/subir.view.php"
 ?>