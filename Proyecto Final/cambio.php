
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>InPhoto</title>
  <link rel="shortcut icon" href="img/Inicio/Logo.png" />
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
  <link href="css/estilos.css" rel="stylesheet">

  
</head>   
<body background=imagen>
      

  <header class="masthead">
 <div id="form-main">
  <div id="form-div">
    <form class="form" role="form" action="Conexiones/cambio.php" method="POST" class="form-register">
        <center><h2 style="color:white;text-align: justify;">Podemos ayudarte a restablecer tu contraseña, escribe tu correo .</h2></center>
        <br>
        <input type="text" class="feedback-input" placeholder="Correo" name="Correo" id="Correo" required>
      <div class="submit">
        <input type="submit" value="Enviar" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
      </div> 
  </header>
 <img class="movimiento" style="wi" src="" id="imagen">
</body>
</html>

<script>
    
    var imagenes=new Array
    (
        ['img/Inicio/1.jpg'],
        ['img/Inicio/6.jpg'],
        ['img/Inicio/10.jpg'],
        ['img/Inicio/4.jpg'],
        ['img/Inicio/11.jpg'],
        ['img/Inicio/12.jpg'],
        ['img/Inicio/13.jpg'],  
    );
    
    var contador=0;
 
    function rotarImagenes()
    {
        contador++
        document.getElementById("imagen").src=imagenes[contador%imagenes.length][0];
       
    }
    onload=function()
    {
        rotarImagenes();
        setInterval(rotarImagenes,3200);
    }
</script>
