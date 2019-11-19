<?php
$conexion=mysqli_connect("mysql.hostinger.es","union","union2019","SitioWeb");

$conn = mysqli_connect("mysql.hostinger.es","u604611936_pho","juegos15","u604611936_inphoto");
$correo=$_POST['Correo'];


$linea="[InPhoto] Recuperacion de Clave-Soporte";
$linea1="Estimado: ";
$linea2="Recientemente a solicitado recuperar su contraseña,hemos actualizado sus datos y asignamos una nueva contraseña para su cuenta, sus datos son los siguientes.";
$linea8="La siguiente Contraseña estara activa durante 24 Horas:";
$linea3="Usuario: ";
$linea4="Contraseña: ";

$linea5="Puedes Ingresar en: http://inphotos.esy.es/";
$linea6="Atentamente:";
$linea7="Equipo de Soporte";
$salto="\n";

$aleatorio = substr(uniqid('', true), -5);

$sql = "select contrasenia as clave FROM tbl_recuperaContrasenia WHERE estado='1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$contra = $row['clave'];
$encrypt=sha1($contra);

  $sql ="update tbl_usuario set password_usuario='$encrypt' WHERE correo_usuario ='$correo'";
  $estado="update tbl_recuperaContrasenia set estado='0' WHERE contrasenia='$contra'";
  $nueva ="INSERT INTO tbl_recuperaContrasenia (id, contrasenia, estado) VALUES ('','$aleatorio','1')" ;
  $result = mysqli_query($conn,$sql);
  $resultado = mysqli_query($conn,$nueva);
  $resutlados = mysqli_query($conn,$estado);

$mensaje=$linea1.$correo.$salto.$salto.$linea2.$salto.$salto.$linea8.$salto.$salto.$linea3.$correo.$salto.$linea4.$contra.$salto.$salto.$linea5.$salto.$salto.$linea6.$salto.$linea7.$salto;



if(!(mail($correo,$linea,$mensaje,$linea1.$correo)))
{
     echo "Correo no Enviado";
}
else{
  header('location:../envio.php');
}