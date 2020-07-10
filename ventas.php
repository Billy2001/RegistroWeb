<?php 

	$conexion=mysqli_connect('localhost','root','admin','ventadecasa');

 ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Mostrar Ventas</title>
	<style>
tr:hover td{
	background-color: #000000;
	color: white;
}
table tr:nth-child(even) {
    background-color: #DFDFDF;
	
}
 
table tr:nth-child(odd) {
    background-color:#DA3232;
}
 -
 table{
    width: 100%;
    border-collapse: collapse;
}

table .head{
    background-color:blue;
}
table .head td{
    color: #fff;
    font-family: 'Arial',sans-serif;
    font-weight: bold;
    font-size: 15px;
    text-align: center;
}

table tr td{
    border:1px solid #ccc;
    padding: 7px;
    font-size: 14px;
    color: #555;
}
 -
th{
	color:whitesmoke;
}
table{
  margin: 0 auto;
}
h1{
	text-align: center;
	font-size: 45px;
}
body{
	background-image: url("img/j.png");
}
		</style>
</head>
<body>
<div class="contenedor">
<h1>Ventas</h1>
<div class="barra_buscador">
	<form action="" class="formulario" method="post">
	<input type="text" placeholder="buscar cliente" class="input_text">
	<input type="submit" name="btn_buscar" value="Buscar">
</form>
</div>
</div>
<br>
<a href=PanelDeControl.php><button type="button" id="inicio"> Inicio</button></a>
	<table border="1" class="list-group">
		<tr>
			<th>No.Venta</th>
			<th>Cliente</th>
			<th>Fecha de Entrega</th>
			<th>Descripcion del pedido</th>
			<th>Cantidad de casas</th>	
			<th>Total a vender</th>
			<th colspan="2">Acción</th>
		</tr>

		<?php 
		$sql="SELECT * from pedidocasa";
		$result=mysqli_query($conexion,$sql);
		

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_venta'] ?></td>
			<td><?php echo $mostrar['cliente'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>
			<td><?php echo $mostrar['cantcasas'] ?></td>
			<td><?php echo $mostrar['totalpagar'] ?></td>
			<td><a href="update.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></td>
			<td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete">Eliminar</a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>