<?php

$conn = mysqli_connect("localhost","root","","desarrollo");
if (!$conn) 
{
 die("Connection failed: " . mysqli_connect_error());   
}

 $nombres = $_POST["nombre"];
 $asunto = $_POST["asunto"];
 $correo = $_POST["correo"];
 $mensaje = $_POST["mensaje"];
 

 $sql = "INSERT INTO contacto(Nombre,Asunto,Correo,Mensaje) VALUES ('$nombres','$asunto','$correo',
 '$mensaje')";

 $result = mysqli_query($conn,$sql);

echo "Contacto Guardado, En breve me estare Comunicando";

//header ("location: index.html");

?>
