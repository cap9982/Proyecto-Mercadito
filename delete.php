<?php
#vincular el archivo de la BD
include 'Cone/conexion.php';

#incluimos la zona horaria
date_default_timezone_set('America/Guatemala');

session_start();

if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_producto'])){
$idbor= $_POST['idborrar'];
$idempleado=$_POST['usuarioid'];
$accion="Eliminó producto de Inventario";
$fecha_actual = date("Y-m-d");

$consulta="DELETE FROM tbl_productos WHERE id_producto=$idbor;";
mysqli_query($conn,$consulta);

$bitacora="INSERT INTO tbl_bitacora(Accion,Fecha_realizado,Empleado_id)
VALUES ('$accion','$fecha_actual',$idempleado)";
mysqli_query($conn,$bitacora);

#recargamos la pagina
header('Location: Inventario.php');


}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_oferta'])){
$idofer= $_POST['idoferta'];
$idempleado=$_POST['usuarioid'];
    $accion="Eliminó Nueva Oferta";
    $fecha_actual = date("Y-m-d");

$cons="DELETE FROM tbl_ofertas WHERE id_oferta=$idofer;";
mysqli_query($conn,$cons);

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

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_empleado'])){
$idemp=$_POST['idempleado'];
$idempleado=$_POST['usuarioid'];
$accion="Eliminó Empleado";
$fecha_actual = date("Y-m-d");

$consu="DELETE FROM tbl_empleado WHERE id_empleado=$idemp;";
mysqli_query($conn,$consu);

$bitacora="INSERT INTO tbl_bitacora(Accion,Fecha_realizado,Empleado_id)
VALUES ('$accion','$fecha_actual',$idempleado)";
mysqli_query($conn,$bitacora);
#recargamos la pagina
header('Location: Empleados.php');

}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_proveedor'])){
$idprov=$_POST['idproveedor'];
$idempleado=$_POST['usuarioid'];
$accion="Eliminó Proveedor de productos";
$fecha_actual = date("Y-m-d");

$consu="DELETE FROM tbl_proveedor WHERE id_proveedor=$idprov;";
mysqli_query($conn,$consu);

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

<?php
if(isset($_POST['delete_bitacora'])){
$idbit=$_POST['idborrarbit'];

$consu="DELETE FROM tbl_bitacora WHERE id_bitacora=$idbit;";
mysqli_query($conn,$consu);

#recargamos la pagina
header('Location: tables.php');
}else{
    echo 'fallo algo';
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_marca'])){
$idmarca=$_POST['idmarca'];
$idempleado=$_POST['usuarioid'];
$accion="Eliminó una marca de productos";
$fecha_actual = date("Y-m-d");

$consu="DELETE FROM tbl_marca WHERE id_marca=$idmarca";
mysqli_query($conn,$consu);

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

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_Carrito'])){
$idcliente=$_POST['idcliente'];

$consulta="DELETE FROM tbl_carrito WHERE Cliente_id=$idcliente;";
mysqli_query($conn,$consulta);
#recargamos la pagina
header('Location: Carritodecompras.php');
}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_usuario'])){
    $idusuario=$_POST['idusuario'];
    $consulta="DELETE FROM tbl_usuario WHERE id_usuario=$idusuario;";
    mysqli_query($conn,$consulta);
    #recargamos la pagina
    header('Location: Usuarios.php'); 

}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_usuariocliente'])){
    $idusuario=$_POST['idusuario'];
    $consulta="DELETE FROM tbl_usuario WHERE id_usuario=$idusuario;";
    mysqli_query($conn,$consulta);
    #recargamos la pagina
    header('Location: Usuarios_clientes.php'); 

}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_tarea'])){
    $idtarea=$_POST['idtarea'];
    $consulta="DELETE FROM tbl_tareas WHERE id_tarea=$idtarea;";
    mysqli_query($conn,$consulta);
    header('Location: Tareas.php');

}else{
    echo 'fallo algo';
}

}else{

    exit("Token Invalido...");
}

?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['delete_prodcarrito'])){
    $idcarritoprod=$_POST['idborrarcarro'];
    $consulta="DELETE FROM tbl_carrito WHERE id_carrito=$idcarritoprod";
    mysqli_query($conn,$consulta);
    header('Location: Carritodecompras.php');
}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>