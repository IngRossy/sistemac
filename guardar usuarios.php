<?php require_once('coneccion.php'); ?>
<?php 
$nombre=$_POST['nombres'];
$direccion=$_POST['direccion'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$categoria=$_POST['cargo'];
$saldo=$_POST['saldo'];
mysql_select_db($database_coneccion, $coneccion);
$insertar=("INSERT INTO cliente(nombre,direccion,usuario,clave,categoria,saldo) VALUES ('$nombre','$direccion','$usuario','$clave','$categoria','$saldo')");
$Result1 = mysql_query($insertar, $coneccion) or die(mysql_error());
mysql_close($coneccion);
header('Location: clienteadministrador.php');
?>

