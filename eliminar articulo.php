<?php 
require_once('coneccion.php'); 
mysql_select_db($database_coneccion, $coneccion);
$cod=$_GET['cod'];
mysql_query("DELETE FROM articulo WHERE idarticulo = '".$cod."' ",$coneccion) or dir ("error en la conexion");
header('Location: articulos.php');

mysql_select_db($database_coneccion, $coneccion);
?>