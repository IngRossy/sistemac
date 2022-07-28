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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">CLIENTES Y ADMINISTRADORES </h1>
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
    <form name="form1" method="post" action="guardar usuarios.php">
      <table width="945" border="1" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td colspan="7"><div align="left" class="Estilo1">
              <div align="center">INGRESO DE ADMINISTRADORES Y CLIENTES </div>
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
          <td width="183"><div align="right">Saldo</div></td>
          <td width="7"><div align="left"></div></td>
          <td width="161"><div align="left">
              <label>
              <input name="saldo" type="text" id="saldo" size="15" maxlength="10" equired>
              </label>
          </div></td>
          <td width="58"><div align="left"></div></td>
          <td width="140"><div align="right">Usuario</div></td>
          <td width="8"><div align="left"></div></td>
          <td width="350"><div align="left">
              <label></label>
              <input name="usuario" type="text" id="usuario" OnKeypress="return sololetras(event)">
          </div></td>
        </tr>
        <tr>
          <td><div align="right">Nombres</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <label>
              <input name="nombres" type="text" id="nombres" OnKeypress="return sololetras(event)">
              </label>
          </div></td>
          <td><div align="left"></div></td>
          <td><div align="right">Clave</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <label>
              <input name="clave" type="text" id="clave" required>
              </label>
          </div></td>
        </tr>
        <tr>
          <td><div align="right">Direccion</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <label>
              <input name="direccion" type="text" id="direccion" OnKeypress="return sololetras(event)">
              </label>
          </div></td>
          <td><div align="left"></div></td>
          <td><div align="right">Cargo</div></td>
          <td><div align="left"></div></td>
          <td><div align="left">
              <label>
              <select name="cargo" size="1" class="Estilo13" id="cargo" >
                <option value="2">CLIENTE</option>
                <option value="1">ADMINISTRADOR</option>
                                          </select>
              </label>
          </div></td>
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
              <input name="btnguardad" type="submit" id="btnguardad" value="Guardar Usuario">
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
                  <td width="108" bgcolor="#B5B7F9"><div align="left"><strong>Saldo</strong></div></td>
                  <td width="229" bgcolor="#B5B7F9"><div align="left"><strong>Nombres</strong></div></td>
                  <td width="125" bgcolor="#B5B7F9"><div align="left"><strong>Usuario</strong></div></td>
                  <td width="138" bgcolor="#B5B7F9"><div align="left">Clave</div></td>
                  <td width="138" bgcolor="#B5B7F9"><div align="left">Categoría</div></td>
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
		$consultax2 = mysql_query("SELECT * FROM cliente ORDER BY nombre",$coneccion) or dir ("error en la conexion");
		$extraidox1 = mysql_fetch_assoc($consultax2);
		do{ ?>
                <tr>
                  <td><div align="left"><?php echo $extraidox1['saldo']; ?></div></td>
                  <td><div align="left"><?php echo $extraidox1['nombre']; ?> </div></td>
                  <td><div align="left"><?php echo $extraidox1['usuario']; ?></div></td>
                  <td><div align="left"><?php echo $extraidox1['clave']; ?></div></td>
                  <td><div align="left"><?php 
				  if ($extraidox1['categoria']==1){
				  echo("ADMINISTRADOR");}else{echo("CLIENTE");}
				  ?></div></td>
                  <td bgcolor="#F2D5C8"><div align="left" ><a href="eliminar usuarios.php?cod=<?php echo $extraidox1['idcliente']; ?>">Eliminar</a></div></td>
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