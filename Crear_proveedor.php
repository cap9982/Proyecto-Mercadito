<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
.modal {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #111111bd;
    display: flex;
}
.modal-container {
    position: relative;
    margin: auto;
    width: 90%;
    max-width: 600px;
    max-height: 100%;
    background-color: #fff;
    border-radius: 6px;
    padding: 3em 2.5em;
    display: grid;
    gap: 1em;
    place-items: center;
    grid-auto-columns: 100%;
}
.title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 400;
}
.paragraph {
    text-align: center;
    margin-bottom: 1rem;
}
.modal-img {
    width: 50%;
    max-width: 200px;
}
.btns {
    display: flex;
    gap: 15px;
}
.btns > a {
    text-decoration: none;
    padding: 1rem;
    border-radius: .3rem;
    color: #fff;
    font-weight: 400;
}
.btns .open-view {
    color: #222;
    background-color: #e6e6e6;
    border: solid thin gray;
}
.open-guide {
    background-color: #6c63ff;
}
.close {
    position: absolute;
    top: .5rem;
    right: 1rem;
    font-size: 2rem;
    text-decoration: none;
}
    </style>
<title>Ventana Modal</title>
</head>
<body>
    <section class="modal">
        <div class="modal-container">
            <img class="modal-img" src="img/b2ap3_large_que-es-un-tienda-online.png" >
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Ingreso Proveedor!</h1>
            </div>
            <div class="row">
                <form class="user">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="nom_prov"
                                placeholder="Nombre Proveedor">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="tipo"
                                placeholder="Tipo Producto">
                        </div>
                        
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="fec_ini"
                                placeholder="Fecha Inicio contrato">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="fec_fin"
                                placeholder="Fecha fin contrato">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email_prov"
                            placeholder="Correo electrónico">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="telefono"
                                placeholder="Numero Telefono">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="encargado"
                                placeholder="Encargado">
                        </div>
                        
                    </div>
                    
                    <a href="#" class="btn btn-primary btn-user btn-block">
                        Registrar Proveedor
                    </a>
                </form>
                
            </div>
            
            <a href="Proveedores.php" class="close">&times;</a>
        </div>
    </section>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html> 
        