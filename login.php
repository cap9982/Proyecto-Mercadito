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

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"><img width="500" height="500" src="img/b2ap3_large_que-es-un-tienda-online.png"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    <form action="Control.php" method="post" class="user" id="Formulario_login">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="User" aria-describedby="emailHelp"
                                                name="User" placeholder="Usuario" value="<?php if(isset($_COOKIE["usuario_login"])) { echo $_COOKIE["usuario_login"]; } ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="Password" name="Password" placeholder="Contraseña" value="<?php if(isset($_COOKIE["usuario_password"])) { echo $_COOKIE["usuario_password"]; } ?>">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                            &nbsp;
                                                <input <?php if(isset($_COOKIE["usuario_login"])){ echo 'checked'; } ?> type="checkbox" class="custom-control-input" id="remember[0]" name="remember[0]" value='1'>
                                                <label class="custom-control-label" for="remember[0]">Recuerdame</label> 
                                            </div>
                                        </div>
                                        <input type="submit"  class="btn btn-primary btn-user btn-block" value="Login">
                                    </form>
                                    <div id="error"></div>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.php">Olvido su contraseña?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="register.php">Crear cuenta!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>