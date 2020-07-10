<!DOCTIPE html>
<html= lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>
      Check login
</title>
</head>
<?php
session_start();
?>

<?php

include 'conexion.php';

$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
 
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
 // if (password_verify($password, $row['password'])) { 
if ($contraseña==$row['contraseña']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['usuario'];
    echo "<br><br><a href=PanelDeControl.php>Panel de Control</a>"; 
    header("Location.href='PanelDeControl.php'");//redirecciona a la pagina del usuario

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>