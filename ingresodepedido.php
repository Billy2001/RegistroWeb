<?php
//incluimos el archivo donde se encuentran nuestros datos de conexion
 include 'conexion.php';
 

 
 $conexion = new mysqli($servername, $username, $password, $dbname);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM pedidocasa
 WHERE cliente = '$_POST[cliente]'.fecha= '$_POST[fecha]'.descripcion='$_POST[descripcion]'.totalpagar='$_POST[totalpagar]'.cantcasas='$_POST[cantcasas]'";


 $query = "INSERT INTO pedidocasa (cliente,fecha,descripcion,cantcasas,totalpagar) VALUES ('$_POST[cliente]', '$_POST[fecha]','$_POST[descripcion]','$_POST[cantcasas]','$_POST[totalpagar]')";

 if ($conexion->query($query) === TRUE) {
echo "<h1>Se a guardado la venta</h1>";
echo"<h3 align='justify'>"."Inicio:"."<a href='ingresarPedido.html'>Cargar otro pedido</a>"."</h3>";

 }

 else {
 echo "Error al guardar la venta." . $query . "<br>" . $conexion->error; 
   }
 
 mysqli_close($conexion);
?>
