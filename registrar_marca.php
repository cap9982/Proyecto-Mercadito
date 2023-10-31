<?php 
#vincular el archivo de la BD
include 'Cone/conexion.php';

#incluimos la zona horaria
date_default_timezone_set('America/Guatemala');

session_start();

if($_POST['token']==$_SESSION['token']){



if(isset($_POST['send'])){
$id=rand(1,5000);
$marca=$_POST['Marca'];
$descripcion=$_POST['Descripcion'];
$idempleado=$_POST['usuarioid'];
$accion="Agrego Marca de productos al sistema";
$fecha_actual = date("Y-m-d");

$consulta="insert into tbl_marca (id_marca,Marca,Descripcion) values($id,'$marca','$descripcion');";
mysqli_query($conn,$consulta);

$bitacora="INSERT INTO tbl_bitacora(Accion,Fecha_realizado,Empleado_id)
VALUES ('$accion','$fecha_actual',$idempleado)";
mysqli_query($conn,$bitacora);

#recargamos la pagina
header('Location: Marcas.php');




}else{
    echo 'fallo algo';
}

}else{

    exit("Token Invalido...");
}
?>