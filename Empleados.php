<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mercadito</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
    .mi-input::-webkit-input-placeholder { color:rgb(255, 254, 254); }
    </style>
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mercadito</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Datos</span></a>
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
                        <a class="collapse-item" href="Borrar.php">Carrito de compras</a>
                        <!-- <a class="collapse-item" href="Modificar.html">Modificar</a> -->
                        <a class="collapse-item" href="Historial.php">Historial de pedidos</a>
                        <?php }?>
                        <?php if($tipo=='Admin' or $tipo== 'Empleado'){?>
                        <a class="collapse-item" href="Marcas.php">Marcas</a>
                        <a class="collapse-item" href="Tareas.php">Nuevas Tareas</a>
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
                        <a class="collapse-item" href="Usuarios.php">Usuarios</a>
                        <a class="collapse-item" href="Usuarios_clientes.php">Usuarios cliente</a>
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

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

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
                    <h1 class="h3 mb-2 text-gray-800">Planilla de Empleados</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
                            <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modalcrearempleado">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Crear nuevo Empleado</span>
                     </a>
                    <br>
                     <br>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Planilla</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Funciones</th>
                                            <th>Id_Empleado</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Identidad</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>Dirección</th>
                                            <th>Fecha entrada</th>
                                            <th>Cargo</th>
                                            <th>Jornada</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Funciones</th>
                                            <th>Id_Empleado</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Identidad</th>
                                            <th>Teléfono</th>
                                            <th>Email</th>
                                            <th>Dirección</th>
                                            <th>Fecha entrada</th>
                                            <th>Cargo</th>
                                            <th>Jornada</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        ##incluimos la conexion con la bd desde la clase conexion
                                        include 'Cone/conexion.php';
                                        #preparamos la consulta a realizar, mediante la funcion inner join llamaremos los campos cargo y jornada laboral de sus respectivas tablas
                                        $consulta="SELECT id_empleado,Nombre,Apellido,N_identidad,Num_Telefono,Email,Direccion,Fecha_entrada,Cargo,Jornada,Sexo 
                                        FROM tbl_empleado
                                        INNER JOIN tbl_cargo
                                        ON tbl_empleado.Cargo_id = tbl_cargo.id_cargo
                                        INNER JOIN tbl_jornadalaboral
                                        on tbl_empleado.JL_id = tbl_jornadalaboral.id_JL;";

                                        if($result = $conn->query($consulta)){

                                            ##seguidamente ejecutamos un while para que lea los datos fila por fila dentro el cual
                                            ##mostraremos en la tabla mendiate el metoco echo
                                        While($row = $result->fetch_assoc()){
                                            $mosid= $row['id_empleado'];
                                            $mosnom= $row['Nombre'];
                                            $mosape= $row['Apellido'];
                                            $moside= $row['N_identidad'];
                                            $mostel= $row['Num_Telefono'];
                                            $mosemail= $row['Email'];
                                            $mosdir= $row['Direccion'];
                                            $mosfecha= $row['Fecha_entrada'];
                                            $moscargo= $row['Cargo'];
                                            $mosjornada= $row['Jornada'];
                                            $mossexo=$row['Sexo'];

                                            $newdate=date("d/m/Y", strtotime($mosfecha));
                                        
                                        ?>
                                        <tr>
                                            <th>
                                                <form action="delete.php" method="post">
                                                <div  class="form-group">
                                                    <input type="hidden" class="form-control form-control-user" id="token"
                                                    name="token" value="<?php echo $_SESSION['token']?>" readonly>
                                                </div>
                                                <input type="hidden" id="idempleado" name="idempleado" value="<?php echo $mosid?>">
                                                <?php
                                                include 'Cone/conexion.php';
                                                $consultar="SELECT id_empleado FROM tbl_empleado WHERE Usuarioe_id=$IDUSU;";
                                                        if($resultado = $conn->query($consultar)){
                                                            While($linea = $resultado->fetch_assoc()){
                                                                $idempleado=$linea['id_empleado'];
                                                ?>
                                                <div  class="form-group">
                                                        <input type="hidden"  id="usuarioid"
                                                        name="usuarioid" value="<?php echo $idempleado?>" readonly>
                                                    </div>
                                                    <?php
                                                    }
                                                    $resultado->free();
                                                }
                                                    ?>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                    <!-- <i class="fas fa-trash"></i> -->
                                                    <!-- <input type="submit" value="" class="fas fa-trash" name="delete_empleado" style="color: transparent; background-color: transparent; border-color: transparent; cursor: default;"> -->
                                                    <button type="submit" class="btn btn-danger btn-circle btn-sm" name="delete_empleado"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                    </svg></button>
                                                </a>
                                                </form>
                                                
                                                <button  type="button" id="btnmodificar" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#modalmodificarempleado" data-id_empleado="<?php echo $mosid?>" data-nombre="<?php echo $mosnom?>" data-apellido="<?php echo $mosape?>" data-identidad="<?php echo $moside?>" data-sexo="<?php echo $mossexo?>" data-telefono="<?php echo $mostel?>" data-direccion="<?php echo $mosdir?>" data-correo="<?php echo $mosemail?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide" viewBox="0 0 16 16">
                                                    <path d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z"/>
                                                    </svg></button>
                                            </th>
                                            <td><?php echo $mosid ?></td>
                                            <td><?php echo $mosnom ?></td>
                                            <td><?php echo $mosape ?></td>
                                            <td><?php echo $moside ?></td>
                                            <td><?php echo $mostel ?></td>
                                            <td><?php echo $mosemail ?></td>
                                            <td><?php echo $mosdir ?></td>
                                            <td><?php echo $newdate ?></td>
                                            <td><?php echo $moscargo ?></td>
                                            <td><?php echo $mosjornada ?></td>
                                        </tr>
                                        <?php
                                                
                                            }
                                            $result->free();
                                        }
                                          // endforeach
                                            
                                            ?>                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <!-- <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div> -->
                </div>
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
                <div class="modal-body">Seleccione "Logout" abajo si quiere terminar la sesión.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!--Crear Nuevo Empleado modal-->
    <div class="modal fade" id="modalcrearempleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Empleado</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body row">
                <form action="registrar_empleado.php" method="post" enctype="multipart/form-data" class="user">
                                    <?php
                                    include 'Cone/conexion.php';
                                    $consulta="SELECT id_empleado FROM tbl_empleado WHERE Usuarioe_id=$IDUSU;";
                                            if($result = $conn->query($consulta)){
                                                While($row = $result->fetch_assoc()){
                                                    $idempleado=$row['id_empleado'];
                                    ?>
                                    <div  class="form-group">
                                            <input type="hidden" class="form-control form-control-user" id="usuarioid"
                                            name="usuarioid" value="<?php echo $idempleado?>" readonly>
                                        </div>
                                        <?php
                                        }
                                        $result->free();
                                    }
                                        ?>
                                        <div  class="form-group">
                                            <input type="hidden" class="form-control form-control-user" id="token"
                                            name="token" value="<?php echo $_SESSION['token']?>" readonly>
                                        </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="name"
                                           name="name" placeholder="Nombre" maxlength="45" size="45">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="lastname"
                                           name="lastname" placeholder="Apellido" maxlength="45" size="45">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="N_identidad"
                                           name="N_identidad" placeholder="Identidad" maxlength="45" size="45">
                                    </div>
                                    <hr>
                                    <div class="col-sm-6 dropdown mb-4">
                                        <input name="sexoempleado" list="btn_Sexo" class="btn btn-primary dropdown-toggle mi-input" placeholder="Sexo">
                                            <datalist id="btn_Sexo">
                                            <option value="M">
                                            <option value="F">
                                            <option value="O">
                                            </datalist>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="Telefono"
                                           name="Telefono" placeholder="Telefono" maxlength="20" size="20">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="Direccion"
                                           name="Direccion" placeholder="Direccion Corta" maxlength="45" size="45">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="Email"
                                        name="Email" placeholder="Correo electrónico" maxlength="45" size="45">
                                </div>
                                <div class="form-group">
                                <div class="col-sm-6 dropdown mb-4">
                                        <input name="jornada" list="btn_jornada" class="btn btn-primary dropdown-toggle mi-input" placeholder="jornada">
                                            <datalist id="btn_jornada">
                                                <?php
                                                ##incluimos la conexion con la bd desde la clase conexion
                                                include 'Cone/conexion.php';
                                                #preparamos la consulta a realizar, mediante la funcion inner join llamaremos los campos cargo y jornada laboral de sus respectivas tablas
                                                $consulta="SELECT id_JL,Jornada FROM tbl_jornadalaboral;";
                                                if($result = $conn->query($consulta)){
                                                    While($row = $result->fetch_assoc()){
                                                        $idjornada=$row['id_JL'];
                                                        $jornada=$row['Jornada'];
                                                ?>
                                            <option value="<?php echo $idjornada?>"><?php echo $jornada?></option>
                                            <?php
                                             }
                                             $result->free();
                                         } 
                                            ?>
                                            </datalist>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="User"
                                        name="User" placeholder="Nombre de Usuario" maxlength="10" size="10">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                           name="Password" id="Password" placeholder="contraseña" maxlength="25" size="25">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            name="repeat" id="exampleRepeatPassword" placeholder="repetir contraseña" maxlength="25" size="25">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="file" class="fileUpload btn btn-primary" id="Foto"
                                    name="Foto" placeholder="Foto">
                                </div>
                                <input type="submit" value="Registrar cuenta" class="btn btn-primary btn-user btn-block" name="send">
                                
                                <hr>
                            </form>

                </div> 
            </div>
        </div>
    </div>
    

    <script>
                                $(document).on("click", "#btnmodificar", function() {
                                    var id_empleado = $(this).data('id_empleado');
                                    var nombre = $(this).data('nombre');
                                    var apellido = $(this).data('apellido');
                                    var identidad = $(this).data('identidad');
                                    var sexo = $(this).data('sexo');
                                    var telefono = $(this).data('telefono');
                                    var direccion = $(this).data('direccion');
                                    var correo = $(this).data('correo');
                                    
                                    $("#modid").val(id_empleado);
                                    $("#modname").val(nombre);
                                    $("#modlastname").val(apellido);
                                    $("#modN_identidad").val(identidad);
                                    $("#modsexoempleado").val(sexo);
                                    $("#modTelefono").val(telefono);
                                    $("#modDireccion").val(direccion);
                                    $("#modEmail").val(correo);
                                    
                                })
                            </script>

    <!--Crear Modificar Empleado modal-->
    <div class="modal fade" id="modalmodificarempleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Empleado</h5>
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

                                    <?php
                                    include 'Cone/conexion.php';
                                    $consulta="SELECT id_empleado FROM tbl_empleado WHERE Usuarioe_id=$IDUSU;";
                                            if($result = $conn->query($consulta)){
                                                While($row = $result->fetch_assoc()){
                                                    $idempleado=$row['id_empleado'];
                                    ?>
                                    <div  class="form-group">
                                            <input type="hidden" class="form-control form-control-user" id="usuarioid"
                                            name="usuarioid" value="<?php echo $idempleado?>" readonly>
                                        </div>
                                        <?php
                                        }
                                        $result->free();
                                    }
                                        ?>
                                    <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="modid"
                                        name="modid" readonly>
                                    </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="modname"
                                           name="modname" placeholder="Nombre" maxlength="45" size="45" >
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="modlastname"
                                           name="modlastname" placeholder="Apellido" maxlength="45" size="45" >
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="modN_identidad"
                                           name="modN_identidad" placeholder="Identidad" maxlength="45" size="45" >
                                    </div>
                                    <hr>
                                    <div class="col-sm-6 dropdown mb-4">
                                        <input id="modsexoempleado" name="modsexoempleado" list="btn_Sexo" class="btn btn-primary dropdown-toggle mi-input" placeholder="Sexo" >
                                            <datalist id="btn_Sexo">
                                            <option value="M">
                                            <option value="F">
                                            <option value="O">
                                            </datalist>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="modTelefono"
                                           name="modTelefono" placeholder="Telefono" maxlength="20" size="20" >
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="modDireccion"
                                           name="modDireccion" placeholder="Direccion Corta" maxlength="45" size="45" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="modEmail"
                                        name="modEmail" placeholder="Correo electrónico" maxlength="45" size="45" >
                                </div>
                                <input type="submit" value="Modificar cuenta" class="btn btn-primary btn-user btn-block" name="modificar_empleado">
                                
                                <hr>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>