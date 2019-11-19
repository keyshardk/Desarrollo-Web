
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
    
    <div class="barra">
    </div>
    
     <img class="logo" src="img/Inicio/Logo.png"> 
     <img class="nombre1" src="img/Inicio/in.png"> 
    
  <div class="inicio">
       <form style="margin-top:-30px;" class="form-inline" role="form" action="Conexiones/inicio.php" method="POST" class="form-register">
           <label style="color:white;margin-left:10px;">Correo Electronico</label>
          <input class="color" type="text" class="rounded-0 form-control-md mr-sm-2 mb-5 mb-lg-0" name="correo" id="correo" required>
            <label style="color:white;margin-left: 10px">Contraseña</label>
          <input  class="color" type="password" class="rounded-0 form-control-md mr-sm-5 mb-5 mb-lg-0" name="clave" id="clave" required>
           <br>
        <div> 
          <input type="submit" style="margin-left:-313px;margin-right: 20px;margin-top:-50px;" name="accion" id="accion" value="Entrar" class="boton_personalizado">
       </div>  
        <div> 
             <a style="color:white;margin-left:29px;margin-top:14px;"  href="cambio.php">¿Olvidó su contraseña?</a> 
        </div>  
            <a style="color:white;margin-left: -635px;margin-top:14px;"  href="cambio.php"></a> 
        </form>
    </div>      

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
      
      <div id="form-div1">
    <form class="form" class="form-register">
        <center><h4 style="color:white;">*Correo Envio.</h4></center>
        <br>
        <div class="ease"></div>
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
