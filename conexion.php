<?php
function conex($server,$usua,$pass,$name){
$cx=@mysql_connect($server,$usua,$pass);
@mysql_select_db($name,$cx);
}
?>