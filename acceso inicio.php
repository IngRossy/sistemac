<?php require_once('coneccion.php'); 
$cargo=$_POST['cargo'];
$cedula=$_POST['usuario'];
$clave=$_POST['clave'];
$cat=2;
error_reporting(0);

mysql_select_db($database_coneccion, $coneccion);
$consultaest = mysql_query("SELECT * FROM cliente where usuario='$cedula' and clave='$clave' and categoria='$cat'",$coneccion) or dir ("error en la conexion");
$extraidoest = mysql_fetch_assoc($consultaest);

//session_destroy();
session_start();


mysql_select_db($database_coneccion, $coneccion);
//INGRESO DE ADMINISTRADOR
if($cargo==1){
$query="SELECT * FROM cliente  WHERE usuario='".$cedula."' AND clave='".$clave."' AND categoria='".$cargo."'";
$q=mysql_query($query,$coneccion);
try{
if (mysql_result($q,0))
{
$_SESSION['nombre'] = $cedula;
header ('Location: principal administrador.php');
}
else
{
header ('Location: acceso.html');

}
}catch(Exception $error){}
}
//CLIENTE
if($cargo==2){
$query="SELECT * FROM cliente  WHERE usuario='".$cedula."' AND clave='".$clave."' AND categoria='".$cargo."'";
$q=mysql_query($query,$coneccion);
try{
if (mysql_result($q,0))
{
header ('Location: principal cliente.php');
$_SESSION['nombre'] = $extraidoest['nombre'];
$_SESSION['idcliente'] = $extraidoest['idcliente'];
}
else
{
header ('Location: acceso.html');
}
}catch(Exception $error){}
}

//OTROS
if($cargo=="0"){
header ('Location: acceso.html');
}
mysql_close($com);
?>
