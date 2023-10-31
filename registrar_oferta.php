<?php
#vincular el archivo de la BD
include 'Cone/conexion.php';

#incluimos la zona horaria
date_default_timezone_set('America/Guatemala');
session_start();

if($_POST['token']==$_SESSION['token']){
if(isset($_POST['send'])){
    ##cargamos las variables con el metodo POST
    $id=rand(1,5000);
    $descripcion=$_POST['Descripcion'];
    $fechaini=$_POST['Fechaini'];
    $fechafin=$_POST['Fechafin'];
    $empleado=0001;
    $tipo=$_POST['Tipoferta'];
    $producto=$_POST['producto'];
    $idempleado=$_POST['usuarioid'];
    $accion="Registró Nueva Oferta";
    $fecha_actual = date("Y-m-d");

    ##creamos una variable con la consulta de INSERT para la tabla tbl_oferta
    $domm="INSERT INTO tbl_ofertas(id_oferta,Descripcion,fecha_inicio,fecha_fin,id_empleado,Tipo_promo,producto_id) 
    VALUES($id,'$descripcion','$fechaini','$fechafin',$idempleado,'$tipo',$producto);";
    mysqli_query($conn,$domm);

    ##hacer update en tabla producto

    $productotabla="UPDATE tbl_productos
    SET oferta_id=$id
    WHERE id_producto=$producto";
    mysqli_query($conn,$productotabla);

    $bitacora="INSERT INTO tbl_bitacora(Accion,Fecha_realizado,Empleado_id)
    VALUES ('$accion','$fecha_actual',$idempleado)";
    mysqli_query($conn,$bitacora);

    #recargamos la pagina
    header('Location: NuevasOfertas.php');
}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}

?>