<?php
session_start();
include 'conexion.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());

}

 $correo=$_POST['correo'];
 $pass=$_POST['clave'];
 $encrypt = sha1($pass);

 $_SESSION ['usuario'] = $correo;
 $sql = "SELECT PK_idUsuario, correo_usuario from tbl_usuario WHERE correo_usuario = '$correo' and password_usuario = '$encrypt'";
 $result = mysqli_query($conn,$sql);

 if($row = mysqli_fetch_array($result))
 {
     $correo   = $row["correo_usuario"];
     $tipoUser = $row["PK_idUsuario"];
     
     $_SESSION ['usuario'] = $tipoUser;
     header ("location:../fotos.php"); 
 }
else
{
   header ("location:../index_sesion.html"); 
}
?>

