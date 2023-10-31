<?php
#vincular el archivo de la BD
include 'Cone/conexion.php';

#incluimos la zona horaria
date_default_timezone_set('America/Guatemala');

#traer los datos de los imputs y los almacenamos en variables
if(isset($_POST['send'])){
$id=rand(1,5000);
$nombre= $_POST['name'];
$apellido= $_POST['lastname'];
$identidad= $_POST['N_identidad'];
$sexo= $_POST['sexo'];
$telefono= $_POST['Telefono'];
$direccion= $_POST['Direccion'];
$email= $_POST['Email'];
$fecha_actual = date("Y-m-d");
$pedido ='0010';
$factura ='001';
$usuariod ='003';
$usuid=rand(1,5000);
$usuario=$_POST['User'];
$password=md5($_POST['Password']);
$repeat=md5($_POST['repeat']);

$foto=$_FILES['Foto']['name'];
 $temporal=$_FILES['Foto']['tmp_name'];
 $carpeta='../img';
 $ruta=$carpeta.'/'.$foto;
 move_uploaded_file($temporal,$carpeta.'/'.$foto);

if($password==$repeat){
    $usu="insert into tbl_usuario(id_usuario,usuario,password,tipo,Foto_perfil) values($usuid,'$usuario','$password','Cliente','$ruta');";
    
    mysqli_query($conn,$usu);
    }
    $consulta="SELECT id_usuario from tbl_usuario WHERE usuario='$usuario';";

if($result = $conn->query($consulta)){
    While($row = $result->fetch_assoc()){
    $nuevousu= $row['id_usuario'];

    $domm="INSERT INTO tbl_cliente(id_cliente,Nombre,Apellido,Sexo,Num_Telefono,Email,Direccion,Fecha,Pedido_id,Fectura_id,N_identidad,Usuario_id) 
    values($id,'$nombre','$apellido','$sexo','$telefono','$email','$direccion','$fecha_actual',$pedido,$factura,'$identidad',$nuevousu);
    ";
    mysqli_query($conn,$domm);
    #recargamos la pagina
header('Location: login.php');
}
$result->free();
}

}
else{
    echo 'fallo algo';
}


?>