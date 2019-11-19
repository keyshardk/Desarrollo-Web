<?php 
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion = null || $varsession = '')
{
	echo 'Usted no Tiene Autorizacion';
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minium-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/stilos.css">
	<link href="css/estilos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<title>Galeria</title>
</head>
<body>

	<div class="barraInicio">
		<div class="container">
			<div class="align-self-center ml-auto">
				<ul class="u-list-inline">
					<li class="list-inline-item g-mr-5">
						<a class="movimientos" style="color:#3CDDE7;" ><?php echo $_SESSION['usuario']?></a>
						<i  class="movimientos0" style="color:#ffff;" >/</i>
					</li>
					<li class="list-inline-item g-mr-5">
					<a  class="movimientos1" href="../MostrarPerfil.php"  id="nombreuser" name="nombreuser">Perfil</a>
						<i class="movimientos2" style="color:#ffff;">/</i>
					</li>
					<li class="list-inline-item g-mr-5">
						<a class="movimientos3" href="Conexiones/logout.php">Cerrar Sesion</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<header>
		<img src="img/Inicio/Logo.png" class="imagen-encabezado">
		<div class="contenedor">
			<h1 class="titulo"> <img class="nombre" src="img/Inicio/in.png"> </h1>
		</div>
	</header>

	
 <a style="color:white;" href="subir.php" class="btn btn-primary tam"><h4 style="margin-top:5px;">Subir Foto</h4></a>    
    
		<div class="topnav" >
			<div  class="search-container">
				<form  action="buscador_imagenes.php" method="POST">
					<input style="color:black;" type="text" placeholder="Buscar..." name="buscar" id="buscar">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
    <br>
    <br>
    <br>

	<section class="fotos">
		<div class="contenedor">

			<?php foreach($fotos as $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['PK_idFoto']; ?>">
						<img src="img/<?php echo $foto['ruta_foto']?>" style= "filter: <?php echo $foto['filtro_foto']?>">
					</a>
				</div>
			<?php endforeach;?>
            
            
			<div class="paginacion">
				
				<?php if ($pagina_actual > 1): ?>
					<a href="fotos.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"> ←</a>
				<?php endif?>

				<?php if ($total_paginas != $pagina_actual): ?>
					<a href="fotos.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha"> → </a>

				<?php endif ?>

				
			</div>

		</div>
	</section>
    
    
    

	


</body>
</html>