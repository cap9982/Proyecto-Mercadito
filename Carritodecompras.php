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
    <style>.mi-input::-webkit-input-placeholder { color:rgb(255, 254, 254); }</style>
    <?php
session_start();
$usuario=$_SESSION["Usuario"];
$tipo=$_SESSION["tipo"];
$IDUSU=$_SESSION['idusu'];
$_SESSION['token']=bin2hex(random_bytes(32));
if(!isset($usuario)){
    header("location: login.php");
}
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
                        <?php if($tipo=='Cliente'){?>
                        <a class="collapse-item" href="Crear.php">Tienda Online</a>
                        <!-- <a class="collapse-item" href="Borrar.php">Carrito de compras</a> -->
                        <!-- <a class="collapse-item" href="Modificar.html">Modificar</a> -->
                        <a class="collapse-item" href="Historial.php">Historial de pedidos</a>
                        <?php }?>
                        <?php if($tipo=='Admin' or $tipo== 'Empleado'){?>
                        <a class="collapse-item" href="Marcas.php">Marcas</a>
                        <a class="collapse-item" href="Proveedores.php">Proveedor</a>
                        <a class="collapse-item" href="Inventario.php">Inventario</a>
                        <?php }?>
                        <?php if($tipo=='Cliente'){?>
                        <a class="collapse-item" href="Promociones.php">Promociones</a>
                        <?php }?>
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
                    <span>Sobre Nosotros</span></a>
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
            <?php
            if($tipo=='Admin'){
            ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

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
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Bitacora</span></a>
            </li>
<?php }?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    <h1 class="h3 mb-4 text-gray-800">Carrito de Compras</h1>
                    <!-- Carrito de compras -->
                    <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Funciones</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fecha_compra</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody name="tablacontenido">
                    <?php
                     ##incluimos la conexion con la bd desde la clase conexion
                     include 'Cone/conexion.php';
                     #preparamos la consulta a realizar 
                     date_default_timezone_set('America/Guatemala');
                     $fecha_actual = date("Y-m-d");
                     $consulta="SELECT id_carrito,Producto_id,tbl_productos.Nombre_producto,Fecha_compra,tbl_carrito.Cantidad,tbl_productos.Precio,tbl_productos.Foto,tbl_productos.Descripcion 
                     FROM tbl_carrito
                     INNER JOIN tbl_productos
                     ON tbl_carrito.Producto_id = tbl_productos.id_producto
                     Where tbl_carrito.Cliente_id = $IDUSU;";

                    if($result = $conn->query($consulta)){
                        $array_int=array();
                        ##seguidamente ejecutamos un while para que lea los datos fila por fila dentro el cual
                        ##mostraremos en la tabla mendiate el metoco echo
                        While($row = $result->fetch_assoc()){
                            $mosid=$row['Producto_id'];
                            $mospro=$row['Nombre_producto'];
                            $mosfe=$row['Fecha_compra'];
                            $moscantidad=$row['Cantidad'];
                            $cantidadsend=$row['Cantidad'];
                            $mosprecio=$row['Precio'];
                            
                            $mosfoto=$row['Foto'];
                            $mosidcarro=$row['id_carrito'];
                            $preciototal=$mosprecio * $moscantidad;
                            $preciopago=$preciototal;
                            $newdatecompra=date("d/m/Y", strtotime($mosfe));
                            $array_int[]=$preciototal;
                            $prueba=array($preciototal);
                            $abc=array_sum($array_int);
                            $adc=$abc* 0.12;
                            $aac=$abc+$adc;
                            
                            $_SESSION['idcarrito']=$mosidcarro;
                            $IDCARR=$_SESSION['idcarrito'];
                            $_SESSION['idprod']=$mosid;
                            $IDPROD=$_SESSION['idprod'];
                            $_SESSION['cant']=$cantidadsend;
                            $CANTI=$_SESSION['cant'];
                            $_SESSION['probando']=array_sum($array_int);
                            $PROBANDO=$_SESSION['probando'];
                    ?>
                    <th scope="row">
                    <form action="delete.php" method="post">
                    <div  class="form-group">
                        <input type="hidden" class="form-control form-control-user" id="token"
                           name="token" value="<?php echo $_SESSION['token']?>" readonly>
                    </div>
                        <input type="hidden" id="idborrarcarro" name="idborrarcarro" value="<?php echo $mosidcarro?>">
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                        <!-- <i type="submit" class="fas fa-trash"></i> -->
                            <button type="submit" name="delete_prodcarrito" class="btn btn-danger btn-circle btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg></button></form>   
                
                    </th>
                    <td><?php echo $mospro?></td>
                    <td><?php echo number_format($preciototal, 2, '.', ',')?></td>
                    <td><?php echo $newdatecompra?></td>
                    <td>
                    <form action="update.php" method="post">
                    <input type="number" name="cantidad" id="cantidad" value="<?php echo $moscantidad?>">
                    
                        <input type="hidden" class="form-control form-control-user" id="token"
                           name="token" value="<?php echo $_SESSION['token']?>" readonly>
                    
                    <input type="hidden" id="idmodcarro" name="idmodcarro" value="<?php echo $mosidcarro?>">
                    <button type="submit" name="mod_cantcarrito" class="btn btn-info btn-circle btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                    <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
                    <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
                    </svg></button>
                
                
                    </form>
                
                    </td>
                    <td><img src="<?php echo $mosfoto?>" width="75px" height="75px"></td>
                    </tr>
                    <?php }
                    }?>
                    <tfoot>
                    <th></th>
                   <?php
                   if(isset($abc)){
                   ?>
                    <th>Total a Pagar</th>    
                    <th><?php echo number_format($abc, 2, '.', ',')?></th></tfoot>
                    <?php
                   }
                    ?>
                    </tbody>
                    <tfoot>
                    
                    <?php 
                     ##incluimos la conexion con la bd desde la clase conexion
                     include 'Cone/conexion.php';
                     #preparamos la consulta a realizar 
                     date_default_timezone_set('America/Guatemala');
                     $fecha_actual = date("Y-m-d");
                     $consulta="SELECT count(Cliente_id) FROM tbl_carrito 
                     WHERE Cliente_id=$IDUSU;";
                    
                    if($result = $conn->query($consulta)){

                        ##seguidamente ejecutamos un while para que lea los datos fila por fila dentro el cual
                        ##mostraremos en la tabla mendiate el metoco echo
                        While($row = $result->fetch_assoc()){
                            $conteo=$row['count(Cliente_id)'];
                            if($conteo==0){
                    ?>
                    
			        <tr id="footer">
                    <!-- <p style="display:none" id="leyenda">Carrito vacío - comience a comprar!</p> -->
				    <th scope="row" colspan="5">Carrito vacío - comience a comprar!</th> 
			        </tr>
			        </tfoot>
                    <?php 
                            }    
                }
                    }?>
                    
                    </table>
                    <!--Borrar carrito de compras-->
                    <th><form action="delete.php" method="post">
                    <div  class="form-group">
                        <input type="hidden" class="form-control form-control-user" id="token"
                           name="token" value="<?php echo $_SESSION['token']?>" readonly>
                    </div>
                    <input type="hidden" id="idcliente" name="idcliente" value="<?php echo $IDUSU?>">
                    <button type="submit" name="delete_Carrito" class="btn btn-outline-danger">Vaciar Carrito</button>
                    </form>
                    <!---Pago-->
                    <input type="hidden" id="idproducto" name="idproducto" value="<?php echo $mosid?>">
                    <input type="hidden" id="idcliente" name="idcliente" value="<?php echo $IDUSU?>">
                    <button type="button" id="btnmodificar" class="btn btn-outline-success" data-toggle="modal" data-target="#modalmodificarperfil" 
                    data-idusuario="<?php echo $IDUSU?>" data-idproducto="<?php echo $IDPROD?>" data-idcarro="<?php echo $IDCARR?>" data-cantidad1="<?php echo $PROBANDO?>">
                    Comprar</button></th>
                    

                    
                 </div>
                <!-- /.container-fluid -->

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
                                    var id_usuario = $(this).data('idusuario');
                                    var id_producto = $(this).data('idproducto');
                                    var id_carro = $(this).data('idcarro');
                                    var cantidad = $(this).data('cantidad1');
                                    
                                    $("#id_usuario").val(id_usuario);
                                    $("#id_producto").val(id_producto);
                                    $("#id_carro").val(id_carro);
                                    $("#cantidad").val(cantidad);
                                })
                            </script>




    <!--modal pagar-->
    <div class="modal fade" id="modalmodificarperfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Caja de Pago</h5>
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
                <input type="hidden" id="id_usuario" name="id_usuario" class="form-control form-control-user" readonly></div>
                <div class="form-group">
                <input type="hidden" id="id_producto" name="id_producto" class="form-control form-control-user" readonly></div>
                <div class="form-group">
                <input type="hidden" id="id_carro" name="id_carro" class="form-control form-control-user" readonly></div>
                <div class="form-group">
                <input type="hidden" id="cantidad" name="cantidad" class="form-control form-control-user" readonly></div>
                <?php
                 include 'Cone/conexion.php';
                 date_default_timezone_set('America/Guatemala');
                 $fecha_actual = date("Y-m-d");
                $consultasuma="SELECT sum(Total) from tbl_pago WHERE id_pago=(SELECT max(id_pago) FROM tbl_pago WHERE usuario_id=$IDUSU);";
                if($suma= $conn->query($consultasuma)){
                    While($countrow = $suma->fetch_assoc()){
                        $totasumado=$countrow['sum(Total)'];
                ?>
                <div class="form-group">
                <input type="text" id="Total" name="Total" class="form-control form-control-user" value="<?php echo $aac?>">
                </div>
                <?php
                    }
                    $suma->free();
                }
                ?>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="tarjeta"
                               name="tarjeta" placeholder="solo si tiene tarjeta" >
                        </div>
                        <div class="col-sm-6">
                        <input name="estado" id="estado" list="btn_estado" class="btn btn-primary dropdown-toggle mi-input" placeholder="Donde desea pagar">
                        <datalist id="btn_estado">
                        <option value="Tienda">
                        <option value="Online">
                        
                        </datalist>
                        </div>
                      </div>  
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="tipopago" id="tipopago" list="btn_pago" class="btn btn-primary dropdown-toggle mi-input" placeholder="Forma de Pago">
                        <datalist id="btn_pago">
                        <?php 
                            ##incluimos la conexion con la bd desde la clase conexion
                        include 'Cone/conexion.php';
                        ##incluimos la consulta para mostrar los datos de la tabla de marcas
                        $consulta="SELECT id_fp,Forma_pago FROM tbl_formapago;";
                        if($result = $conn->query($consulta)){
                        While($row = $result->fetch_assoc()){
                            $idfp=$row['id_fp'];
                            $formapago=$row['Forma_pago'];
                            ?>
                        <option value="<?php echo $idfp?>"><?php echo $formapago?></option>
                            <?php
                              }
                              $result->free();
                          }
                          
                            
                            ?>
                        </datalist>
                        </div>
                        
                                    </div> 
                      <input type="submit" value="Pagar" class="btn btn-primary btn-user btn-block" name="Pago_tienda">
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