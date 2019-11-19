<?php 
	
	function conexion_bd($base_datos, $usuario, $password)
	{
		try {
			$conexion = new PDO("mysql:host=localhost;dbname=$base_datos", $usuario, $password);
			return $conexion;
		} catch (PDOException $e) {
			return false;
		}
	}

 ?>