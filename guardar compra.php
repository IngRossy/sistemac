<?php require_once('coneccion.php'); ?>
<?php 

$codcliente=$_POST['codcliente'];
$codi=$_POST['codi'];
$fecha=$_POST['fecha'];
$codarticulo=$_POST['articulo'];
$cantidad=$_POST['cantidad'];
$saldo=$_POST['saldo'];

mysql_select_db($database_coneccion, $coneccion);
$consultaest = mysql_query("SELECT * FROM articulo where idarticulo='$codarticulo'",$coneccion) or dir ("error en la conexion");
$extraidoest = mysql_fetch_assoc($consultaest);
$valor=$extraidoest['valor'];
$existencia=$extraidoest['existencia'];

$total=$valor*$cantidad;
echo($total);

if ($saldo>=$total && $existencia>=$cantidad){

mysql_select_db($database_coneccion, $coneccion);
$insertar=("INSERT INTO pedido(idcliente,fecha,total) VALUES ('$codcliente','$fecha','$total')");
$Result1 = mysql_query($insertar, $coneccion) or die(mysql_error());

mysql_select_db($database_coneccion, $coneccion);
$insertarx=("INSERT INTO tablapedido(idpedido,idarticulo,cantidad) VALUES ('$codi','$codarticulo','$cantidad')");
$Result1x = mysql_query($insertarx, $coneccion) or die(mysql_error());

$valto=$saldo-$total;
mysql_select_db($database_coneccion, $coneccion);
$insert = sprintf("UPDATE cliente SET saldo='$valto' where idcliente = '$codcliente' ");
$Result1 = mysql_query($insert, $coneccion) or die(mysql_error());

$exist=$existencia-$cantidad;
mysql_select_db($database_coneccion, $coneccion);
$insert = sprintf("UPDATE articulo SET existencia='$exist' where idarticulo = '$codarticulo' ");
$Result1 = mysql_query($insert, $coneccion) or die(mysql_error());


mysql_close($coneccion);
header('Location: productos.php');
}
else
{
header('Location: compras.php');

}
?>

