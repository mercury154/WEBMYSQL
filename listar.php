<?php
require_once('conexion.php');
conex('localhost','root','123456','prueba');
?>
<html>
	<head>
		<style type="text/css">
		body{
			margin:0;
			padding: 0;
		}
		body table{
			border:0;
		}

		</style>
	</head>
<body>
<?php
$sele="SELECT * FROM CLIENTE";
$listar=mysql_query($sele);
?>
<center>
<table border="">
<tr>
	<td align="center" bgcolor="#222" colspan="6">
		LISTAR CLIENTE
	</td>
</tr>
<tr>
	<td align="center">
		Id_Usuario
	</td>
	<td align="center">
		Nombre
	</td>
	<td align="center">
		Apellido
	</td>
	<td align="center">
		DNI
	</td>
	<td align="center">
		Telefono
	</td>
	<td align="center">
		Comentario
	</td>
</tr>
<?php

while ($mostrar=mysql_fetch_array($listar)) 
{

?>
<tr>
<td><?php echo $mostrar["id_cliente"];?></td>
<td><?php echo $mostrar["nomb_cli"];?></td>
<td><?php echo $mostrar["ape_cli"];?></td>
<td><?php echo $mostrar["DNI_cli"];?></td>
<td><?php echo $mostrar["fono_cli"];?></td>
<td><?php echo $mostrar["comentario"];?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>