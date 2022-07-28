<?php require_once('coneccion.php'); ?>
<?php 
session_start();
$nombre=$_SESSION['nombre'];
$id=$_SESSION['idcliente'];
mysql_select_db($database_coneccion, $coneccion);
$consultaest = mysql_query("SELECT * FROM cliente where idcliente='$id'",$coneccion) or dir ("error en la conexion");
$extraidoest = mysql_fetch_assoc($consultaest);
$saldo=$extraidoest['saldo'];
$nomb=$extraidoest['nombre'];
$id=$extraidoest['idcliente'];
echo($id);
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
      
			
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">Dispone un saldo de: <?php echo($saldo);  ?></span>
                </a>
                <a href="" class="btn border">
                    <i class=""></i>
                    <span class="badge"><?php echo($nomb);  ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="principal cliente.php" class="nav-item nav-link active">Principal</a>
                            <a href="compras.php" class="nav-item nav-link">Compras</a>
                            <a href="productos.php" class="nav-item nav-link">Productos</a>
                            <a href="index.html" class="nav-item nav-link">Salir</a>
                    </div>
                
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-3">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">PRODUCTOS TECNOLOGICOS </h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">COMPRAS</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">ONLINE</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <!-- Checkout End -->


    <!-- Footer Start -->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <form name="form1" method="post" action="guardar compra.php">
      <table width="945" border="1" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td colspan="7"><div align="left" class="Estilo1">
              <div align="center">COMPRA N&ordm; <?php $consultaest1 = mysql_query("SELECT * FROM pedido",$coneccion) or dir ("error en la conexion");
$extraidoest1 = mysql_fetch_assoc($consultaest1);

do{ $cod=$extraidoest1['idpedido'] + 1; }while ($extraidoest1 = mysql_fetch_assoc($consultaest1));
			      
echo($cod);
?></div>
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
          <td width="183"><div align="right">C&oacute;digo del cliente </div></td>
          <td width="7"><div align="left"></div></td>
          <td width="161"><div align="left">
              <label>
              <input name="codcliente" type="text" id="codcliente" disabled="disabled" size="15" maxlength="10" equired value="<?php echo($id);?>">
              </label>
          </div></td>
          <td width="58"><div align="left"></div></td>
          <td width="140"><div align="right">Saldo del cliente </div></td>
          <td width="8"><div align="left"></div></td>
          <td width="350"><div align="left">
              <label></label>
              <input name="saldo" type="text" id="saldo" disabled="disabled" OnKeypress="return sololetras(event)" value="<?php echo($extraidoest['saldo']);?>">
          </div></td>
        </tr>
        <tr>
          <td><div align="right">Nombres</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <label>
              <input name="nombres" type="text" id="nombres" disabled="disabled" OnKeypress="return sololetras(event)" value="<?php echo($nombre);?>">
              </label>
          </div></td>
          <td><div align="left"></div></td>
          <td><div align="right">Fecha</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <label>
              <input name="fecha" type="date" id="fecha" required>
              </label>
          </div></td>
        </tr>
        <tr>
          <td><div align="right">Dirección para la entrega</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <label>
              <input name="direccion" type="text" id="direccion" OnKeypress="return sololetras(event)" value="<?php echo($extraidoest['direccion']);?>">
              </label>
          </div></td>
          <td><div align="left"></div></td>
          <td colspan="3">&nbsp;</td>
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
              <label>
              <input name="btnguardad" type="submit" id="btnguardad" value="Realizar compra">
              </label>
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
              <table width="1273" border="1" align="center" cellpadding="1" cellspacing="1">
                <tr>
                  <td width="199" bgcolor="#B5B7F9">Cod Pedido </td>
                  <td width="891" bgcolor="#B5B7F9"><div align="left"><strong>Art&iacute;culo a comprar </strong></div></td>
                  <td width="165" bgcolor="#B5B7F9">Cantidad</td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left">
                      
                    </div>
                      <div align="left"></div>
                    <div align="left"></div>
                    <div align="left"></div>
                    <div align="left"></div>
                    <div align="left"></div></td>
                </tr>
                <tr>
                  <td><label>
                    <input name="codi" type="text" disabled="disabled" id="codi" size="10" value="<?php echo $cod;?>">
                  </label></td>
                  <td><div align="left"><select name="articulo" size="1" id="articulo" >
			      <option selected="selected">Seleccione articulo</option>
			      <?php 		
				mysql_select_db($database_coneccion, $coneccion);
				$consultausuario = mysql_query("SELECT idarticulo,nombre,valor,existencia FROM articulo",$coneccion) or dir ("error en la conexion");
				$extraidousuario = mysql_fetch_assoc($consultausuario);
				do{?>
			      <option value="<?php echo $extraidousuario['idarticulo']; ?>"><?php echo $extraidousuario['nombre']; ?> a : <?php echo $extraidousuario['valor']; ?> exist :<?php echo $extraidousuario['existencia']; ?> </option>
			      <?php }while ($extraidousuario = mysql_fetch_assoc($consultausuario))?>
			      </select>
		     </div></td>
                  <td><label>
                    <input name="cantidad" type="text" id="cantidad">
                  </label></td>
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
    </form>
</body>

</html>