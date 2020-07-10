<?php
session_start();
include 'conexion.php';
$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Inicia Sesion para acceder a este contenido.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
   header('url("Ejercicio/login.html")');//redirige a la página de login si el usuario quiere ingresar sin iniciar sesion


exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();
header('url("Ejercicio/login.html');//redirige a la página de login, modifica la url a tu conveniencia
echo "Tu sesion a expirado,
<a href='login.html'>Inicia Sesion</a>";
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil de usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Eliminando el subrayado de los links -->
  <style type="text/css"> 
  a:link 
  { 
  text-decoration:none; 
  } 
  button {
    background-color:red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
  
}
body{}
  </style>

</head>
<body>

<div class="jumbotron text-center">
  <h1>Bienvenido <?php echo  $_SESSION['usuario'];?></h1>
 
  <a href=sesionstop.php><button type="button" > Cerrar Sesion</button></a>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <a href=ingresarPedido.html><button type="button"> Ingresar la venta</button></a>      
      
    </div>
    <div class="col-sm-4">
</div>

    <div class="col-sm-4">
    <a href=ventas.php aling="left"><button type="button"> Ventas Generales</button></a>    

    </div>
    
  </div>
 
  </div>

 
</div>
  




</body>
</html>