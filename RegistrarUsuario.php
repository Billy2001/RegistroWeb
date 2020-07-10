<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 include 'conexion.php';
 
 $form_pass = $_POST['password'];
 
 
 $conexion = new mysqli($servername, $username, $password, $dbname);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM usuarios
 WHERE usuario = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "Nombre de Usuario ya asignado, ingresa otro." . "<br />";

 echo "<a href='indice.html'>Por favor escoja otro Nombre</a>";
 }
 else{

 $query = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$_POST[username]', '$form_pass')";

 if ($conexion->query($query) === TRUE) {
echo "<br />" . "<h1 align='justify'>"."Gracias por registrarse!". "</h1>".
"<h3 align='justify'>"."Bienvenido: " . $_POST['username'] . "</h3>" . "\n\n".
"<h3 align='justify'>" . "Iniciar Sesion: " . "<a href='login.html'>Login</a>" . "</h3>";

 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>
