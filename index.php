<html>
	<head>
		<title>
			PRACTICA DE PHP
		</title>
	</head>
<body bgcolor="#434343">
<?php
echo"<h1>PRACTICA DE PHP</h1>";

$ran=rand(1,150);
echo"EL NUMERO SORTEADO ES &nbsp;".$ran."</br>";

if($ran<10){
echo"ESTE VALOR TIENE UN DIGITO</br>";
}
else if($ran<100){
echo"ESTE VALOR TIENE DOS DIGITOS";
}
else{
	echo"ESTE VALOR TIENE DOS TRES DIGITOS";
}
?>
<?php
$OK=$_GET["OK"];
$LETRA=$_GET["LETRA"];
if($OK=="evento1"){
	switch ($LETRA) {
	case 'a':
	echo"<br/>aguila";
	break;
	case 'b':case'B':
	echo"vaca";
	break;
	case'c':
	echo "<br>caballo";
	echo "<br>camello";		
	break;
	default:echo "<br>no hay";	
	};
};
?>
<form action="index.php" method="GET">
DAME UNA LETRA:<input type="text" name="LETRA" VALUES="<?php echo'$LETRA'?>"/><br/>
<input type="submit" name="OK" VALUE="evento1"><br/>
</form>
<a href="caso.php">caso</a>

<hr>
<?php
$posi=$_POST["posi"];
$ACEPTAR=$_POST["ACEPTAR"];
if($ACEPTAR=='ace'){
	echo"eres el mejor";
}
else{
	echo"no estas apto";
}
?> 
<form action="index.php" method="POST">
<input type="submit" name="ACEPTAR" VALUE="ace"/>
<hr>


</form>
<?php 
$OK=$_POST["OK"];
if($OK=='EJECUTAR'){
for($i=0;$i<10;$i++){
	echo"$i<br>";
	if($i==9){
		echo"<script>alert('llego al 9')</script>";
	}
}
}
?>
<form action="index.php" method="POST">
<input type="submit" name="OK" value="EJECUTAR"/>
</form>
<hr>
<?php
$vector=array(
	1 =>"uno",
	2 =>"dos"

	);
foreach ($vector as $indice => $valor) {
	echo"$valor<br>";
}
?>
<?php
$combo=array(
		1 =>"JUAN",
		2 =>"ISAIAS",
		3 =>"RONALD",
		4 =>"JHONATAN"
	);
foreach($combo as $indes => $valor){
	echo"$valor<br>";
}
?>
<?php
$avion=$_POST['avion'];
$mano=array($_POST['avion']);
?>
<form action="" method="POST">
	<?php
	foreach($mano as $valor){
		echo $valor;
	}
	?>
	<input type="text" name="avion"/><input type="submit" name="ejecuta" value="ejecuta"/>
</form>
<?php
$var=0;
while($var<10){
$var++;
echo"$var";
echo"<hr>";
}
echo"termino".$var."";
?>
<hr height="50">
<?php
for($i=1;$i<=5;$i++){
	echo"<input type='text' name='i'/>";
}
?>
<form action="index.php" method="POST">
<input type="submit" name="EJEC" value="PROCESAR"/>
</form>
<?php
$EJEC=$_POST['EJEC'];
if($EJEC=='PROCESAR'){
	echo"POR LA PTM";
}
?>
<a href="listar.php">LISTAR TABLA</a>
</body>
</html>