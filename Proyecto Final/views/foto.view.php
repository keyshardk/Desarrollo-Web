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
			<h1 class="titulo">
				<?php if (!empty($foto['nombre_foto']))
					{
						echo $foto['nombre_foto'];
					}
					else{
						echo $foto['ruta_foto'];
					}

				?>
				
			</h1>
		</div>
        
         
	</header>

		<div class="contenedor">
		<div class="foto">
			<img src="img/<?php echo $foto['ruta_foto']; ?>"  style= "filter: <?php echo $foto['filtro_foto']?>">
			<p class="texto"> <?php echo $foto['descripcion_foto']; ?> </p>
			<a href="fotos.php" class="regresar">←</a>
		</div>
	</div>

</html>