<?php
#vincular el archivo de la BD
include 'Cone/conexion.php';

#incluimos la zona horaria
date_default_timezone_set('America/Guatemala');

session_start();

if($_POST['token']==$_SESSION['token']){

if(isset($_POST['send'])){
$id=rand(1,5000);
$nombre= $_POST['name'];
$apellido= $_POST['lastname'];
$identidad= $_POST['N_identidad'];
$sexo= $_POST['sexoempleado'];
$telefono= $_POST['Telefono'];
$direccion= $_POST['Direccion'];
$email= $_POST['Email'];
$fecha_actual = date("Y-m-d");
$cargo=003;
$factura=001;
$rol=003;
$jornada=$_POST['jornada'];
$usuid=rand(1,5000);
$usuario=$_POST['User'];
$password=md5($_POST['Password']);
$repeat=md5($_POST['repeat']);

$idempleado=$_POST['usuarioid'];
$accion="Registró Nuevo Empleado";

$foto=$_FILES['Foto']['name'];
$temporal=$_FILES['Foto']['tmp_name'];
$carpeta='../img';
$ruta=$carpeta.'/'.$foto;
move_uploaded_file($temporal,$carpeta.'/'.$foto);


if($password==$repeat){
    $usu="insert into tbl_usuario(id_usuario,usuario,password,tipo,Foto_perfil) values($usuid,'$usuario','$password','Empleado','$ruta');";
    
    mysqli_query($conn,$usu);
    }
$consulta="SELECT id_usuario from tbl_usuario WHERE usuario='$usuario';";
if($result = $conn->query($consulta)){
    While($row = $result->fetch_assoc()){
        $nuevousu= $row['id_usuario'];

        $contenido="INSERT INTO tbl_empleado(id_empleado,Nombre,Apellido,N_identidad,Sexo,Num_Telefono,Email,Direccion,Fecha_entrada,Cargo_id,Factura_id,Rol_id,JL_id,Usuarioe_id)
        VALUES($id,'$nombre','$apellido','$identidad','$sexo','$telefono','$email','$direccion','$fecha_actual',$cargo,$factura,$rol,$jornada,$nuevousu);";

        mysqli_query($conn,$contenido);

        $bitacora="INSERT INTO tbl_bitacora(Accion,Fecha_realizado,Empleado_id)
        VALUES ('$accion','$fecha_actual',$idempleado)";
        mysqli_query($conn,$bitacora);

        #recargamos la pagina
        header('Location: Empleados.php');
    }
    $result->free();
}
}else{
    echo 'fallo algo';
}


}else{

    exit("Token Invalido...");
}
?>