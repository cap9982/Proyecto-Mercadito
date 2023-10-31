<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<style>
    .mi-input::-webkit-input-placeholder { color:rgb(255, 254, 254); }
</style>
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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img width="500" height="500" src="img/b2ap3_large_que-es-un-tienda-online.png"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Creacion de cuenta!</h1>
                            </div>
                            <form action="registrar_cliente.php" method="post" enctype="multipart/form-data" class="user">
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
                                           name="N_identidad" placeholder="Identidad" maxlength="25" size="25">
                                    </div>
                                    <hr>
                                    <div class="col-sm-6 dropdown mb-4">
                                        <input name="sexo" list="btn_Sexo" class="btn btn-primary dropdown-toggle mi-input" placeholder="Sexo">
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
                            
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">olvido su contraseña?</a>
                            </div> -->
                            <div class="text-center">
                                <a class="small" href="login.php">Ya tiene una cuenta? Login!</a>
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