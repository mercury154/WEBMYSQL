<html>
<head></head>
<body bgcolor="#222">
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
<form action="caso.php" method="GET">
DAME UNA LETRA:<input type="text" name="LETRA" VALUES="<?php echo'$LETRA'?>"/><br/>
<input type="submit" name="OK" VALUE="evento1"><br/>

</body>
</html>