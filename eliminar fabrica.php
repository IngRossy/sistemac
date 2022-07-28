<?php 
require_once('coneccion.php'); 
mysql_select_db($database_coneccion, $coneccion);
$cod=$_GET['cod'];
mysql_query("DELETE FROM fabrica WHERE idfabrica = '".$cod."' ",$coneccion) or dir ("error en la conexion");
header('Location: fabrica.php');

mysql_select_db($database_coneccion, $coneccion);
?>