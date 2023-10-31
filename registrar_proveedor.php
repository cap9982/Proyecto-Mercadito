<?php
#vincular el archivo de la BD
include 'Cone/conexion.php';

#incluimos la zona horaria
date_default_timezone_set('America/Guatemala');

session_start();

if($_POST['token']==$_SESSION['token']){

if(isset($_POST['send'])){
    $id=rand(1,5000);
    $nombre=$_POST['NombreProv'];
    $tipo=$_POST['Tipo'];
    $fechaini=$_POST['Fechainicio'];
    $fechafin=$_POST['Fechafin'];
    $email=$_POST['Email'];
    $telefono=$_POST['Telefono'];
    $encargado=$_POST['Encargado'];
    $direccion=$_POST['Direccion'];
    $fac='001';
    $idempleado=$_POST['usuarioid'];
    $accion="Agregó proveedor de productos";
    $fecha_actual = date("Y-m-d");

$consulta="insert into tbl_proveedor(id_proveedor,Nombre_proveedor,Tipodeproductos,Fecha_iniciocontrato,Fecha_fincontrato,Email,Telefono,Encargado,Direccion,Factura_id) 
values ($id,'$nombre','$tipo','$fechaini','$fechafin','$email','$telefono','$encargado','$direccion',$fac);";


mysqli_query($conn,$consulta);

$bitacora="INSERT INTO tbl_bitacora(Accion,Fecha_realizado,Empleado_id)
VALUES ('$accion','$fecha_actual',$idempleado)";
mysqli_query($conn,$bitacora);

#recargamos la pagina
header('Location: Proveedores.php');
}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>