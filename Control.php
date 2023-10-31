<?php 
#vincular el archivo de la BD
include 'Cone/conexion.php';

date_default_timezone_set('America/Guatemala');

##con el metodo POST traemos los datos del formulario del LOGIN
$posusu= $_POST['User'];
$pospass= md5($_POST['Password']);
##creamos las variables de sesion
$sentinela="NO";


##consulta para lectura de datos de la tabla de usuarios
$consulta="SELECT id_usuario,usuario,password,Tipo,Foto_perfil FROM tbl_usuario;";
if($result = $conn->query($consulta)){
    While($row = $result->fetch_assoc()){

        ## leemos los datos de la tabla de usuario
        $idusu= $row['id_usuario'];
        $usuario= $row['usuario'];
        $password= $row['password'];
        $tipo= $row['Tipo'];
        $foto=$row['Foto_perfil'];

     
        ##verificacion de tipo de usuario
        if($posusu==$usuario and $pospass==$password){
            $sentinela="SI";

                if($tipo=='Admin'){
                    session_start();
                    $_SESSION["Usuario"]=$posusu;
                    $_SESSION['idusu']=$idusu;
                    $_SESSION["tipo"]="Admin";
                    header('Location: index.php');
                }elseif($tipo=='Empleado'){
                    session_start();
                    $_SESSION["Usuario"]=$posusu;
                    $_SESSION['idusu']=$idusu;
                    $_SESSION["tipo"]="Empleado";
                    header('Location: index.php');
                }elseif($tipo=='Cliente'){
                    session_start();
                    $_SESSION["Usuario"]=$posusu;
                    $_SESSION['idusu']=$idusu;
                    $_SESSION['fotoperfil']=$foto;
                    $_SESSION["tipo"]="Cliente";
                    header('Location: Cliente.php');
                }
            
        }
        
       
    }
    if($sentinela=="NO"){
        // header('Location: login.php');
        echo '<script type="text/javascript">alert("Usuario o contraseña incorrectos");</script>'; 
        echo '<script> window.location="login.php"; </script>';
        
    }
    
    $result->free();
}

//Funcion recuerdame By:mama COCO

function recuerdame($posusu,$pospass){
    $chk_recuerdame=isset($_POST['remember'][0]) ? 1 : 0;
    if($chk_recuerdame==1){
        setcookie("usuario_login", $posusu, time()+(60*60*24*365),httponly:true);
        setcookie("usuario_password", $pospass, time()+(60*60*24*365),httponly:true);
    }

}
?>
