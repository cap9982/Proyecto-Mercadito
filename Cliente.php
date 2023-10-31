<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mercadito</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
    .ir-arriba {
	display:none;
	padding:20px;
	background:#024959;
	font-size:20px;
	color:#fff;
	cursor:pointer;
	position: fixed;
	bottom:20px;
	right:20px;


   
}
</style>
<?php
session_start();
$usuario=$_SESSION["Usuario"];
$tipo=$_SESSION["tipo"];
$IDUSU=$_SESSION['idusu'];
$FOTOP=$_SESSION['fotoperfil'];
$_SESSION['token']=bin2hex(random_bytes(32));

if(!isset($usuario)){
    header("location: login.php");
}
//$tipo='Cliente';
?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Cliente.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mercadito</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="Cliente.php">
                    <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
                    <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
                    </svg></i>
                    <span>Menu Principal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Funciones</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Funciones:</h6>
                        
                        <a class="collapse-item" href="Crear.php">Tienda Online</a>
                        <!-- <a class="collapse-item" href="Borrar.php">Carrito de compras</a> -->
                        <!-- <a class="collapse-item" href="Modificar.html">Modificar</a> -->
                        <a class="collapse-item" href="Historial.php">Historial de pedidos</a>
                        <?php if($tipo=='Admin' or $tipo== 'Empleado'){?>
                        <a class="collapse-item" href="Proveedores.php">Proveedor</a>
                        <a class="collapse-item" href="Inventario.php">Inventario</a>
                        <?php }?>
                        <a class="collapse-item" href="Promociones.php">Promociones</a>
                        <?php if($tipo=='Admin' or $tipo== 'Empleado'){?>
                        <a class="collapse-item" href="NuevasOfertas.php">Nuevas Ofertas</a>
                        <?php }?>
                        <a class="collapse-item" href="Ubicaciones.php">ubicaciones</a>
                        <?php if($tipo=='Admin'){?>
                        <a class="collapse-item" href="Empleados.php">Empleados</a>
                        <?php }?>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="SobreNosotros.php">
                    <i class=""></i>
                    <span>Sobre nosotros</span></a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <?php
            if($tipo=='Admin'){
            ?>
            <div class="sidebar-heading">
                Admin
            </div> 
            <?php }?>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item active" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <?php 
            if($tipo=='Admin'){
            
            ?>
             <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Bitacora</span></a>
            </li> 
            <?php }?>
            <span class="ir-arriba icon-arrow-up2"></span>
            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="buscar por..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!--Carrito de compras-->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                </svg></i>
                                <!-- Counter - Carrito de compras -->
                                <?php
                                ##incluimos la conexion con la bd desde la clase conexion
                                include 'Cone/conexion.php';
                                #preparamos la consulta a realizar 
                                $consulta="SELECT count(Cliente_id) FROM tbl_carrito WHERE Cliente_id=$IDUSU;";
                                if($result = $conn->query($consulta)){
                                    While($row = $result->fetch_assoc()){
                                        $conteo=$row['count(Cliente_id)'];
                                ?>
                                <span class="badge badge-danger badge-counter"><?php echo $conteo?>+</span>
                                <?php
                                    }
                                }
                                ?>
                            </a>
                            <!-- Dropdown - Carrito de compras -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Carrito de compra
                                </h6>
                                <?php
                                ##incluimos la conexion con la bd desde la clase conexion
                                include 'Cone/conexion.php';
                                #preparamos la consulta a realizar 
                                $consulta="SELECT Producto_id,tbl_productos.Nombre_producto,Fecha_compra,tbl_carrito.Cantidad,tbl_productos.Precio,tbl_productos.Foto,tbl_productos.Descripcion 
                                FROM tbl_carrito
                                INNER JOIN tbl_productos
                                ON tbl_carrito.Producto_id = tbl_productos.id_producto
                                Where tbl_carrito.Cliente_id = $IDUSU
                                LIMIT 3;";

                                if($result = $conn->query($consulta)){

                                ##seguidamente ejecutamos un while para que lea los datos fila por fila dentro el cual
                                ##mostraremos en la tabla mendiate el metoco echo
                                While($row = $result->fetch_assoc()){
                                    $mosid=$row['Producto_id'];
                                    $mospro=$row['Nombre_producto'];
                                    $mosfe=$row['Fecha_compra'];
                                    $moscantidad=$row['Cantidad'];
                                    $mosprecio=$row['Precio'];
                                    $mosfoto=$row['Foto'];
                                    $mosdes=$row['Descripcion'];
                                
                                ?>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"><?php echo $mosfe?></div>
                                        <div class="small text-gray-500"><?php echo $mospro?></div>
                                        <span class="font-weight-bold"><?php echo $mosdes?></span>
                                    </div>
                                </a>
                                <?php
                                }
                            }
                                
                                ?>
                                <a class="dropdown-item text-center small text-gray-500" href="Carritodecompras.php">Mostrar Carrito</a>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i> -->
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alertas
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i> -->
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Mensajeria
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $usuario?></span>
                                <?php 
                                include 'Cone/conexion.php';
                                 
                                $consulta="SELECT Foto_perfil FROM tbl_usuario WHERE usuario='$usuario';";

                                if($result = $conn->query($consulta)){
                                    While($row = $result->fetch_assoc()){
                                        $fot=$row['Foto_perfil'];
                                ?>
                                
                                <img class="img-profile rounded-circle"
                                    src="<?php echo $fot?>">
                                    <?php }
                                    }?>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="Perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tienda Online</h1>

                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/5974de41-5cc5-4604-a31a-6b933472b0d5___e1e4b5c8909e7f73428d112b59235387.jpg" alt="First slide" width="300px" height="300px">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5 style="color:#000000">Prueba</h5>
                            <p style="color:#000000">Probando 1 2 3</p>
                          </div> -->
                    </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/3738be10-b713-4ca4-a18c-a8893cb4f827___ebd873d4d592e742ad3698df5acf0f84.jpg" alt="Second slide" width="300px" height="300px">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5 style="color:#000000">Prueba</h5>
                            <p style="color:#000000">Probando 1 2 3</p>
                          </div> -->
                    </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/71b7850c-9ecb-4a39-8ebc-d504b40a4552___383add11c54e9df65f062745404e7a25.jpg" alt="Third slide" width="300px" height="300px">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5 style="color:#000000">Prueba</h5>
                            <p style="color:#000000">Probando 1 2 3</p>
                          </div> -->
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                 <br>
                 <h1 class="h3 mb-4 text-gray-800">Productos Populares</h1>
                <!-- /.container-fluid -->
                <div class="row">
                    <?php 
                    ##incluimos la conexion con la bd desde la clase conexion
                    include 'Cone/conexion.php';
                    $consulta="SELECT id_producto,Codigo,Nombre_producto,Precio,Descripcion,Fecha_elab,Fecha_vence,Foto,Cantidad 
                    FROM tbl_productos WHERE Codigo='abarrotes' limit 4;";
                
                        if($result = $conn->query($consulta)){
                            While($row = $result->fetch_assoc()){
                                $idproducto=$row['id_producto'];
                                $codigo=$row['Codigo'];
                                $producto=$row['Nombre_producto'];
                                $precio=$row['Precio'];
                                $descripcion=$row['Descripcion'];
                                $Fechaelaboracion=$row['Fecha_elab'];
                                $fechavencimiento=$row['Fecha_vence'];
                                $imagen=$row['Foto'];
                                $cantidad=$row['Cantidad'];
                                $newdateinicio=date("d/m/Y", strtotime($Fechaelaboracion));
                                $newdatefin=date("d/m/Y", strtotime($fechavencimiento));
                    
                    ?>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $imagen?>" alt="Card image cap" width="250px" height="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto?></h5>
                                <p class="card-text"><?php echo $newdatefin?></p>
                                <p class="precio"><?php echo number_format($precio, 2, '.', ',')?></p>
                                <center><button type="button" id="btnmodificar" class="btn btn-success" data-toggle="modal" data-target="#modalagregarcarrito" 
                                data-idproducto="<?php echo $idproducto?>" data-cantidad="<?php echo  $cantidad?>"
                                 data-producto="<?php echo $producto?>" data-precio="<?php echo number_format($precio, 2, '.', ',')?>">
                                 Agregar a Carrito</button></center>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                    $result->free();
                }
                    ?>

                <?php
                        ##incluimos la conexion con la bd desde la clase conexion
                        include 'Cone/conexion.php';
                        $consulta="SELECT id_producto,Codigo,Nombre_producto,Precio,Descripcion,Fecha_elab,Fecha_vence,Foto 
                        FROM tbl_productos WHERE Codigo='Bebida gaseosa' limit 4;";
                        
                        if($result = $conn->query($consulta)){
                            While($row = $result->fetch_assoc()){
                                $idproducto=$row['id_producto'];
                                $codigo=$row['Codigo'];
                                $producto=$row['Nombre_producto'];
                                $precio=$row['Precio'];
                                $descripcion=$row['Descripcion'];
                                $Fechaelaboracion=$row['Fecha_elab'];
                                $fechavencimiento=$row['Fecha_vence'];
                                $imagen=$row['Foto'];

                                $newdateinicio=date("d/m/Y", strtotime($Fechaelaboracion));
                                $newdatefin=date("d/m/Y", strtotime($fechavencimiento));

                ?>


                    <br>
                    <br>
                    <br>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $imagen?>" alt="Card image cap" width="250px" height="250px">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto?></h5>
                                <p class="card-text"><?php echo $newdatefin?></p>
                                <p class="precio"><?php echo number_format($precio, 2, '.', ',')?></p>
                                <center><button type="button" id="btnmodificar" class="btn btn-success" data-toggle="modal" data-target="#modalagregarcarrito" 
                                data-idproducto="<?php echo $idproducto?>" data-cantidad="<?php echo  $cantidad?>"
                                 data-producto="<?php echo $producto?>" data-precio="<?php echo number_format($precio, 2, '.', ',')?>">
                                 Agregar a Carrito</button></center>
                            </div>
                        </div>
                    </div>
                    <?php 
                 }
                 $result->free();
             }
                
                ?>
                <!-- <section class="contenido">
        <div class="mostrador" id="mostrador">
            <div class="fila">
                <?php
                 ##incluimos la conexion con la bd desde la clase conexion
                 include 'Cone/conexion.php';
                 $consulta="SELECT id_producto,Codigo,Nombre_producto,Precio,Descripcion,Fecha_elab,Fecha_vence,Foto 
                 FROM tbl_productos WHERE Codigo='abarrotes' limit 4;";
                
                if($result = $conn->query($consulta)){
                    While($row = $result->fetch_assoc()){
                        $idproducto=$row['id_producto'];
                        $codigo=$row['Codigo'];
                        $producto=$row['Nombre_producto'];
                        $precio=$row['Precio'];
                        $descripcion=$row['Descripcion'];
                        $Fechaelaboracion=$row['Fecha_elab'];
                        $fechavencimiento=$row['Fecha_vence'];
                        $imagen=$row['Foto'];

                ?>
                    <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/no-image.png" alt="">
                    </div>
                    <p class="descripcion"><?php echo $producto?></p>
                    <p class="descripcion"><?php echo $fechavencimiento?></p>
                    <span class="precio"><?php echo number_format($precio, 2, '.', ',')?> LPS.</span>
                </div>
                <?php 
                 }
                 $result->free();
             }
                
                ?>
            </div>
            <br>
            <br>
            <div class="fila">
            <?php
                 ##incluimos la conexion con la bd desde la clase conexion
                 include 'Cone/conexion.php';
                 $consulta="SELECT id_producto,Codigo,Nombre_producto,Precio,Descripcion,Fecha_elab,Fecha_vence,Foto 
                 FROM tbl_productos WHERE Codigo='Bebida gaseosa' limit 4;";
                
                if($result = $conn->query($consulta)){
                    While($row = $result->fetch_assoc()){
                        $idproducto=$row['id_producto'];
                        $codigo=$row['Codigo'];
                        $producto=$row['Nombre_producto'];
                        $precio=$row['Precio'];
                        $descripcion=$row['Descripcion'];
                        $Fechaelaboracion=$row['Fecha_elab'];
                        $fechavencimiento=$row['Fecha_vence'];
                        $imagen=$row['Foto'];

                ?>
                    <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/no-image.png" alt="">
                    </div>
                    <p class="descripcion"><?php echo $producto?></p>
                    <p class="descripcion"><?php echo $fechavencimiento?></p>
                    <span class="precio"><?php echo number_format($precio, 2, '.', ',')?> LPS.</span>
                </div>
                <?php 
                 }
                 $result->free();
             }
                
                ?>
                
            </div> 
            <br>
            <br>
            <div class="fila">
            <?php
                 ##incluimos la conexion con la bd desde la clase conexion
                 include 'Cone/conexion.php';
                 $consulta="SELECT id_producto,Codigo,Nombre_producto,Precio,Descripcion,Fecha_elab,Fecha_vence,Foto 
                 FROM tbl_productos WHERE Codigo='Salud' limit 4;";
                
                if($result = $conn->query($consulta)){
                    While($row = $result->fetch_assoc()){
                        $idproducto=$row['id_producto'];
                        $codigo=$row['Codigo'];
                        $producto=$row['Nombre_producto'];
                        $precio=$row['Precio'];
                        $descripcion=$row['Descripcion'];
                        $Fechaelaboracion=$row['Fecha_elab'];
                        $fechavencimiento=$row['Fecha_vence'];
                        $imagen=$row['Foto'];

                ?>
                    <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/no-image.png" alt="">
                    </div>
                    <p class="descripcion"><?php echo $producto?></p>
                    <p class="text-center"><?php echo $fechavencimiento?></p>
                    <span class="precio"><?php echo number_format($precio, 2, '.', ',')?> LPS.</span>
                </div>
                <?php 
                 }
                 $result->free();
             }
                
                ?>
                
            </div> 
        </div>
        CONTENEDOR DEL ITEM SELECCIONADO
        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>
            <form action="update.php" method="post">
            <div class="info">
                <img src="img/1.png" alt="" id="img">
                <h2 id="modelo" name="modelo">NIKE MODEL 1</h2>
                <p id="descripcion" name="descripcion">Descripción Modelo 1</p>
                <input type="hidden" id="idusuario"
                               name="idusuario" value="<?php echo $IDUSU?>" readonly>
                <span class="precio" id="precio" name="precio">$ 130</span>

                <div class="fila">
                    <div class="size">
                        <label for="">Cantidad</label>
                        <input type="number" name="cantidad_compra" class="form-control form-control-user" value="1">
                    </div>
                    <button type="submit" name="update_carro">AGREGAR AL CARRITO</button>
                </div>
            </div>
            </form>
        </div>
     </section> -->
                    

                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <!-- <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div> -->
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
                                $(document).on("click", "#btnmodificar", function() {
                                    var id_producto = $(this).data('idproducto');
                                    var cantidad= $(this).data('cantidad');
                                    var producto = $(this).data('producto');
                                    var precio = $(this).data('precio');
                                    
                                    $("#idproducto").val(id_producto);
                                    $("#cantidad").val(cantidad);
                                    $("#producto").val(producto);
                                    $("#precio").val(precio);
                                    
                                })
                            </script>


    <!--Agregar a carrito-->
    <div class="modal fade" id="modalagregarcarrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Comprar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body row">
                <form action="update.php" method="post" class="user">
                <div  class="form-group">
                        <input type="hidden" class="form-control form-control-user" id="token"
                           name="token" value="<?php echo $_SESSION['token']?>" readonly>
                    </div>
                    <div class="form-group">
                            <input type="hidden" class="form-control form-control-user" id="idproducto"
                               name="idproducto" readonly>
                      </div> 
                      <div class="form-group">
                            <input type="hidden" class="form-control form-control-user" id="cantidad"
                               name="cantidad" readonly>
                      </div> 
                      <div class="form-group">
                            <input type="hidden" class="form-control form-control-user" id="idusuario"
                               name="idusuario" Value="<?php echo $IDUSU?>" readonly>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="producto"
                                name="producto" placeholder="producto" readonly>
                      </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="cantidadcompra"
                                name="cantidadcompra" placeholder="Cantidad" value="1">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="precio"
                                name="precio" placeholder="precio" readonly>
                        </div>      
                    </div>
                    
                      <input type="submit" value="Agregar a Carrito" class="btn btn-primary btn-user btn-block" name="Agregar_acarro">
                </form>
                </div> 
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/scrypt.js"></script>

</body>

</html>