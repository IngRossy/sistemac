<?php require_once('coneccion.php'); ?>
<?php 
$nombre=$_POST['nombres'];
$direccion=$_POST['telefono'];
mysql_select_db($database_coneccion, $coneccion);
$insertar=("INSERT INTO fabrica(nombre,telefono) VALUES ('$nombre','$direccion')");
$Result1 = mysql_query($insertar, $coneccion) or die(mysql_error());
mysql_close($coneccion);
header('Location: fabrica.php');
?>

