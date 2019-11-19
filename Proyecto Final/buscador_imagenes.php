<?php
$servername = "mysql.hostinger.es";
$username = "u604611936_pho";
$password = "juegos15";
$dbname = "u604611936_inphoto";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$nombreimagen = mysqli_real_escape_string($conn, $_REQUEST['buscar']);

$sql = "SELECT PK_idFoto, ruta_foto from tbl_fotos WHERE nombre_foto = '$nombreimagen' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		header( "Location: foto.php?id=" . $row["PK_idFoto"]);
	}
} else {

	header("Location: fotos.php?Message=" . urlencode("noexiste"));
}

mysqli_close($conn);

?>