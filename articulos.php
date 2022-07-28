<?php require_once('coneccion.php'); ?>
<?php 
session_start();
$nombre=$_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Administrador del sistema</title>
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
      </div>
   
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                </form>
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
                            <a href="principal administrador.php" class="nav-item nav-link active">Principal</a>
                            <a href="clienteadministrador.php" class="nav-item nav-link">Clientes/Administradores</a>
                            <a href="fabrica.php" class="nav-item nav-link">Fabricas</a>
							<a href="articulos.php" class="nav-item nav-link">Articulos</a>
                            <a href="pedidos.php" class="nav-item nav-link">Pedidos</a>
							<a href="index.html" class="nav-item nav-link">Salir</a>
							<a href="" class="nav-item nav-link">- - - - - - -</a>
							<a href="" class="nav-item nav-link"><?php echo($nombre); ?></a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">INGRESO DE ARTICULOS </h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">ADMINISTRADOR</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">SISTEMA</p>
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
    <form name="form1" method="post" action="guardar articulo.php">
      <table width="945" border="1" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td colspan="7"><div align="left" class="Estilo1">
              <div align="center">INGRESO DE ARTICULOS </div>
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
          <td width="183"><div align="right">Nombres art&iacute;culo </div></td>
          <td width="7"><div align="left"></div></td>
          <td width="161"><div align="left">
              <label>
              <input name="nombres" type="text" id="nombres" onKeyPress="return sololetras(event)">
              </label>
          </div></td>
          <td width="58"><div align="left"></div></td>
          <td width="140" rowspan="3"><div align="right">Descripci&oacute;n</div>
              <div align="left"></div></td>
          <td width="8" rowspan="3"><div align="left"></div>
              <div align="left"></div>
            <div align="left"></div></td>
          <td width="350" rowspan="3"><div align="left">
              <label>
              <textarea name="descripcion" id="descripcion" required="required"></textarea>
              </label>
            </div>
              <div align="left">
                <label></label>
              </div>
            <div align="left"></div></td>
        </tr>
        <tr>
          <td><div align="right">Existencia</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <label>
              <input name="existencia" type="text" id="existencia" onKeyPress="return sololetras(event)">
              </label>
          </div></td>
          <td><div align="left"></div></td>
        </tr>
        <tr>
          <td><div align="right">Fabrica</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <select name="fabrica" size="1" id="fabrica" >
                <option selected="selected">Seleccione fabrica</option>
                <?php 		
				mysql_select_db($database_coneccion, $coneccion);
				$consultausuario = mysql_query("SELECT idfabrica,nombre FROM fabrica",$coneccion) or dir ("error en la conexion");
				$extraidousuario = mysql_fetch_assoc($consultausuario);
				do{?>
                <option value="<?php echo $extraidousuario['idfabrica']; ?>"><?php echo $extraidousuario['nombre']; ?></option>
                <?php }while ($extraidousuario = mysql_fetch_assoc($consultausuario))?>
              </select>
          </div></td>
          <td><div align="left"></div></td>
        </tr>
        <tr>
          <td><div align="right">Valor</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <input name="valor" type="text" id="valor" onKeyPress="return sololetras(event)">
          </div></td>
          <td><div align="left"></div></td>
          <td><div align="left"></div></td>
          <td><div align="left"></div></td>
          <td><div align="left"></div></td>
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
              <input name="btnguardad" type="submit" id="btnguardad" value="Guardar Art&iacute;culo">
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
              <p>&nbsp;</p>
            <table width="902" border="1" align="center" cellpadding="1" cellspacing="1">
                <tr>
                  <td width="108" bgcolor="#B5B7F9"><div align="left"><strong>Existencia</strong></div></td>
                  <td width="229" bgcolor="#B5B7F9"><div align="left"><strong>Nombre art&iacute;culo </strong></div></td>
                  <td width="125" bgcolor="#B5B7F9"><div align="left"><strong>Fabrica</strong></div></td>
                  <td width="138" bgcolor="#B5B7F9"><div align="left">Descripci&oacute;n</div></td>
                  <td width="138" bgcolor="#B5B7F9"><div align="left">Valor</div></td>
                  <td width="85" bgcolor="#B5B7F9"><div align="left"><strong>Eliminar</strong></div></td>
                </tr>
                <tr>
                  <td colspan="6"><div align="left">
                      <hr>
                    </div>
                      <div align="left"></div>
                    <div align="left"></div>
                    <div align="left"></div>
                    <div align="left"></div>
                    <div align="left"></div></td>
                </tr>
                <?php 
		mysql_select_db($database_coneccion, $coneccion);
		$consultax2 = mysql_query("SELECT * FROM articulo ORDER BY nombre",$coneccion) or dir ("error en la conexion");
		$extraidox1 = mysql_fetch_assoc($consultax2);
		do{ ?>
                <tr>
                  <td><div align="left"><?php echo $extraidox1['existencia']; ?></div></td>
                  <td><div align="left"><?php echo $extraidox1['nombre']; ?> </div></td>
                  <td><div align="left"><?php echo $extraidox1['idfabrica']; ?></div></td>
                  <td><div align="left"><?php echo $extraidox1['descripcion']; ?></div></td>
                  <td><div align="left"><?php echo $extraidox1['valor']; ?></div></td>
                  <td bgcolor="#F2D5C8"><div align="left" ><a href="eliminar articulo.php?cod=<?php echo $extraidox1['idarticulo']; ?>">Eliminar</a></div></td>
                </tr>
                <tr>
                  <td colspan="6"><hr></td>
                </tr>
                <?php 
				}while ($extraidox1 = mysql_fetch_assoc($consultax2))?>
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