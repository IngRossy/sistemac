<?php require_once('coneccion.php'); ?>
<?php 
$nombre=$_POST['nombres'];
$existencia=$_POST['existencia'];
$fabrica=$_POST['fabrica'];
$descripcion=$_POST['descripcion'];
$valor=$_POST['valor'];
mysql_select_db($database_coneccion, $coneccion);
$insertar=("INSERT INTO articulo(nombre,existencia,idfabrica,descripcion,valor) VALUES ('$nombre','$existencia','$fabrica','$descripcion','$valor')");
$Result1 = mysql_query($insertar, $coneccion) or die(mysql_error());
mysql_close($coneccion);
header('Location: articulos.php');
?>

