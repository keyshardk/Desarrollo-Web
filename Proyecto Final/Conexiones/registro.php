<?php
    session_start();
    error_reporting(0);
    $varsesion = $_SESSION['usuario'];

   if($varsesion = null || $varsession = '')
{
    echo 'Usted no Tiene Autorizacion';
    die();
}

include 'conexion.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());

}

 $usuario = $_POST["Usuario"];
 $nombre = $_POST["Nombre"];
 $apellido = $_POST["Apellido"];
 $correo = $_POST["Correo"];
 $clave= $_POST["Clave"];
 $encrypt=sha1($clave);

$linea="[InPhoto] Usuario Registrado";
$linea2="InPhoto te da la Bienvenida.";
$linea1="Estimado: ";

$linea3="Te invitamos a visitarnos y empezar a cargar fotos y disfrutar de InPhoto.";
$linea5="Puedes Ingresar en: http://inphotos.esy.es/";

$linea6="Atentamente:";
$linea7="InPhoto";

$salto="\n";

$mensaje=$linea2.$salto.$linea3.$salto.$linea5.$salto.$salto.$linea6.$salto.$linea7;
 
 //consulta insertar
  $insertar = "INSERT INTO tbl_usuario (PK_idUsuario,PK_idPais,PK_idGenero,nombre_usuario,apellido_usuario,password_usuario, fecha_nacimiento,correo_usuario,estado_usuario) VALUES ('$usuario', '1', '1', '$nombre', '$apellido', '$encrypt', '2019-10-08', '$correo', '1');"; 

  $insertar1 = "INSERT INTO tbl_cuenta (PK_idUsuario,PK_idTipoCuenta,nombre_cuenta,estado_cuenta) VALUES ('$usuario', '1', 'Cuenta Registro', '1');"; 

 //consultas
 
 $resultado=mysqli_query($conn, $insertar);
 $resultado1=mysqli_query($conn, $insertar1);

 if (!$resultado)
 {
	  header ("location:../index1.html");
 }
 else 
 {
      $_SESSION ['usuario'] = $usuario;
      $result = mysqli_query($conn,$sql);
      mail($correo,$linea,$mensaje,$linea1.$usuario);
	  header ("location:../fotos.php");
 }
 //Cerrar Conexion
 mysqli_close($conn);

?>
