<?php require_once('coneccion.php'); ?>
<?php 
$idx=$_GET['cod'];
mysql_select_db($database_coneccion, $coneccion);
$consultaes = mysql_query("SELECT * FROM pedido where idpedido='$idx'",$coneccion) or dir ("error en la conexion");
$extraidoes = mysql_fetch_assoc($consultaes);
$id=$extraidoes['idcliente'];

$consultaest = mysql_query("SELECT * FROM cliente where idcliente='$id'",$coneccion) or dir ("error en la conexion");
$extraidoest = mysql_fetch_assoc($consultaest);

$consultaestx = mysql_query("SELECT * FROM tablapedido where idpedido='$idx'",$coneccion) or dir ("error en la conexion");
$extraidoestx = mysql_fetch_assoc($consultaestx);
$idart=$extraidoestx['idarticulo'];

$consultaestxa = mysql_query("SELECT * FROM articulo where idarticulo='$idart'",$coneccion) or dir ("error en la conexion");
$extraidoestxa = mysql_fetch_assoc($consultaestxa);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Compras Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
<!--
.Estilo1 {font-size: 24px}
.Estilo4 {font-size: 24px; font-weight: bold; }
-->
    </style>
</head>

<body>
    <!-- Topbar Start -->
      <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="index.html" class="text-decoration-none">
                    <img class="img-fluid" src="img/Logoempresa.jpg" alt="">
                </a>
            </div>
      </div>



            <div class="col-lg-6 col-6 text-left">
                <form action="">
                </form>
            </div>
</div>
        </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            
        <table width="945" border="1" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td colspan="7"><div align="left" class="Estilo1">
                <div align="center">FACTURA                </div>
            </div>
                <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div></td>
          </tr>
          <tr>
            <td colspan="7"><div align="left">
                <hr>
              </div>
                <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div></td>
          </tr>
          <tr>
            <td width="185" bgcolor="#D7D7D7"><div align="right">Cod. cliente  </div></td>
            <td width="7"><div align="left"></div></td>
            <td width="302"><div align="left"><strong>
            <label><?php echo $extraidoest['idcliente']; ?></label>
                        </strong></div></td>
            <td width="12"><div align="left"></div></td>
            <td width="188" bgcolor="#D7D7D7"><div align="right">Fecha de compra  </div></td>
            <td width="9"><div align="left"></div></td>
            <td width="204"><div align="left"><strong>
              <?php echo $extraidoes['fecha'] ?>
            </strong></div></td>
          </tr>
          <tr>
            <td bgcolor="#D7D7D7"><div align="right">Nombre</div></td>
            <td><div align="left"></div></td>
            <td><div align="left"><strong>
            <label><?php echo $extraidoest['nombre']; ?></label>
                        </strong></div></td>
            <td><div align="left"></div></td>
            <td bgcolor="#D7D7D7"><div align="right">Saldo Disponible </div></td>
            <td><div align="left"></div></td>
            <td><div align="left"><strong>
              <?php echo $extraidoest['saldo']; ?>
                        </strong></div></td>
          </tr>
          <tr>
            <td bgcolor="#D7D7D7"><div align="right">Direcci&oacute;n </div></td>
            <td><div align="left"></div></td>
            <td><div align="left"><strong>
            <label><?php echo $extraidoest['direccion']; ?></label>
                        </strong></div></td>
            <td><div align="left"></div></td>
            <td colspan="3"><div align="right"></div></td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
            <td>&nbsp;</td>
            <td bgcolor="#D7D7D7"><div align="right">Valor Total de la compra: </div></td>
            <td>&nbsp;</td>
            <td bgcolor="#B7FFC9"><div align="center"><span class="Estilo4"><?php echo $extraidoes['total'] ?>&nbsp;</span></div></td>
          </tr>
          <tr>
            <td colspan="7"><div align="left">
                <hr>
              </div>
                <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div></td>
          </tr>
          <tr>
            <td colspan="7"><div align="center">
                <label></label>
              </div>
                <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div></td>
          </tr>
          <tr>
            <td colspan="7"><div align="left">
                <table width="643" border="1" align="center" cellpadding="1" cellspacing="1">
                  <tr>
                    <td width="102" bgcolor="#B5B7F9">Cod Art&iacute;culo </td>
                    <td width="285" bgcolor="#B5B7F9"><div align="left"><strong>Art&iacute;culo  </strong></div></td>
                    <td width="163" bgcolor="#B5B7F9">Cantidad adquirida </td>
                    <td width="70" bgcolor="#B5B7F9">Valor</td>
                  </tr>
                  <tr>
                    <td colspan="4"><div align="left"> </div>
                        <div align="left"></div>
                      <div align="left"></div>
                      <div align="left"></div>
                      <div align="left"></div>
                      <div align="left"></div></td>
                  </tr>
                  <tr>
                    <td><div align="center"><strong>
                    </strong><strong></strong></div>
                      <strong>
                      <label>                      </label>
                      </strong>                      <label>
                      <div align="center"><strong><?php echo $extraidoestx['idarticulo']; ?></strong></div>
                      </label>                    </td>
                    <td><div align="center"><strong><?php echo $extraidoestxa['nombre']; ?></strong></div></td>
                    <td><div align="center"><strong>
                    </strong></div>                      <strong></strong><strong>
                    <label>
                    </label>
                    </strong>
                    <label>
                    <div align="center"><strong><?php echo $extraidoestx['cantidad']; ?></strong></div>
                    </label>
                    <strong></strong><strong>                    </strong></td>
                    <td><div align="center"><strong><?php echo $extraidoestxa['valor']; ?></strong></div></td>
                  </tr>
                </table>
              <p>&nbsp;</p>
            </div>
                <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div></td>
          </tr>
        </table>
</body>

</html>