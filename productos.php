<?php require_once('coneccion.php'); ?>
<?php 
session_start();
$nombre=$_SESSION['nombre'];
$id=$_SESSION['idcliente'];
mysql_select_db($database_coneccion, $coneccion);
$consultaest = mysql_query("SELECT * FROM cliente where idcliente='$id'",$coneccion) or dir ("error en la conexion");
$extraidoest = mysql_fetch_assoc($consultaest);
$saldo=$extraidoest['saldo'];
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
    <link href="css/style.css" rel="stylesheet"></head>

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
                    <span class="badge"><?php echo($nombre);  ?></span>
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
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Productos TECNOLOGICOS </h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">SUMINISTROS</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">TECNOLOGICOS</p>
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
    <table width="706" border="1" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td width="108" bgcolor="#B5B7F9">Nº de Pedido </td>
        <td width="336" bgcolor="#B5B7F9"><div align="left"><strong>Fecha de compra </strong></div></td>
        <td width="151" bgcolor="#B5B7F9"><div align="left"><strong>Valor</strong></div></td>
        <td width="88" bgcolor="#B5B7F9"><div align="left"><strong>Mostrar</strong></div></td>
      </tr>
      <tr>
        <td colspan="4"><div align="left"></div>
            <div align="left"></div>
          <div align="left"></div>
          <div align="left"></div>
          <div align="left"></div>
          <div align="left"></div></td>
      </tr>
      <?php 
		mysql_select_db($database_coneccion, $coneccion);
		$consultax2 = mysql_query("SELECT * FROM pedido where idcliente='$id' ORDER BY fecha",$coneccion) or dir ("error en la conexion");
		$extraidox1 = mysql_fetch_assoc($consultax2);
		do{ ?>
      <tr>
        <td><?php echo $extraidox1['idpedido']; ?></td>
        <td><div align="left"><?php echo $extraidox1['fecha']; ?> </div></td>
        <td><div align="left"><?php echo $extraidox1['total']; ?></div></td>
        <td bgcolor="#F2D5C8"><div align="center"><a rel="nofollow" target="_blank" href="factura.php?cod=<?php echo $extraidox1['idpedido']; ?>">Ver</a></div></td>
      </tr>
      
      <?php 
				}while ($extraidox1 = mysql_fetch_assoc($consultax2))?>
    </table>
</body>

</html>