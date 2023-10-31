<?php
#vincular el archivo de la BD
include 'Cone/conexion.php';

#incluimos la zona horaria
date_default_timezone_set('America/Guatemala');
session_start();

if($_POST['token']==$_SESSION['token']){
if(isset($_POST['modificar_usuario'])){
$id=$_POST['id_usuario'];
$usuario=$_POST['usuario'];
$contra=$_POST['password'];

$consulta="UPDATE tbl_usuario
SET usuario='$usuario', password='$contra'
WHERE id_usuario= $id;";

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
if(isset($_POST['modificar_usuariocliente'])){
    $id=$_POST['id_usuario'];
    $usuario=$_POST['usuario'];
    $contra=$_POST['password'];

$consulta="UPDATE tbl_usuario
SET usuario='$usuario', password='$contra'
WHERE id_usuario= $id;";

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
if(isset($_POST['modificar_productos'])){
$id=$_POST['modid_producto'];
$producto=$_POST['modNombre'];
$precio=$_POST['modPrecio'];
$descripcion=$_POST['modDescripcion'];
$fechaela=$_POST['modFechaelab'];
$fechaven=$_POST['modFechaven'];
$cantidad=$_POST['modCantidad'];
$idempleado=$_POST['usuarioid'];
$accion="Modificó un producto de Inventario";
$fecha_actual = date("Y-m-d");

$consulta="UPDATE tbl_productos
SET Nombre_producto='$producto',Precio=$precio,Descripcion='$descripcion',Fecha_elab='$fechaela',Fecha_vence='$fechaven',Cantidad=$cantidad
WHERE id_producto=$id;";

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
if(isset($_POST['modificar_oferta'])){
$idofer=$_POST['idoferta2'];
$descripcion=$_POST['moddescripcion'];
$fechaini=$_POST['modfec_ini'];
$fechafin=$_POST['modfec_fin'];
$tipo=$_POST['modTipooferta'];
$producto=$_POST['modproducto'];
$idempleado=$_POST['usuarioid'];
    $accion="Modificó Nueva Oferta";
    $fecha_actual = date("Y-m-d");

$consulta="UPDATE tbl_ofertas
SET Descripcion='$descripcion', fecha_inicio='$fechaini', fecha_fin='$fechafin', Tipo_promo='$tipo', producto_id=$producto
WHERE id_oferta=$idofer;";

mysqli_query($conn,$consulta);

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
if(isset($_POST['modificar_proveedor'])){
    $idprov=$_POST['modid_prov'];
    $proveedor=$_POST['modNombreProv'];
    $tipo=$_POST['modTipo'];
    $fecha_ini=$_POST['modfec_ini'];
    $fecha_fin=$_POST['modfec_fin'];
    $correo=$_POST['modemail'];
    $telefono=$_POST['modtelefono'];
    $encargado=$_POST['modencargado'];
    $direccion=$_POST['moddireccion'];
    $idempleado=$_POST['usuarioid'];
    $accion="Modificó Proveedor de productos";
    $fecha_actual = date("Y-m-d");

$consulta="UPDATE tbl_proveedor
SET Nombre_proveedor='$proveedor', Tipodeproductos='$tipo', Fecha_iniciocontrato='$fecha_ini', Fecha_fincontrato='$fecha_fin', 
Email='$correo',  Telefono='$telefono', Encargado='$encargado', Direccion='$direccion' 
WHERE id_proveedor=$idprov";

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

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['modificar_marca'])){
    $idmarca=$_POST['modidmarca'];
    $marca=$_POST['modMarca'];
    $descri=$_POST['modDescripcion'];
    $idempleado=$_POST['usuarioid'];
    $accion="Modificó una marca de productos";
    $fecha_actual = date("Y-m-d");

$consulta="UPDATE tbl_marca
SET Marca='$marca', Descripcion='$descri'
WHERE id_marca=$idmarca";

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

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['modificar_empleado'])){
    $idempleado=$_POST['modid'];
    $nombre=$_POST['modname'];
    $apellido=$_POST['modlastname'];
    $identidad=$_POST['modN_identidad'];
    $sexo=$_POST['modsexoempleado'];
    $numero=$_POST['modTelefono'];
    $direccion=$_POST['modDireccion'];
    $correo=$_POST['modEmail'];
    $idempleadobit=$_POST['usuarioid'];
    $accion="Modificó Empleado";
    $fecha_actual = date("Y-m-d");

$consulta="UPDATE tbl_empleado
SET Nombre='$nombre', Apellido='$apellido', N_identidad='$identidad', Sexo='$sexo', Num_Telefono='$numero',
Email='$correo', Direccion='$direccion'
WHERE id_empleado=$idempleado";


mysqli_query($conn,$consulta);

$bitacora="INSERT INTO tbl_bitacora(Accion,Fecha_realizado,Empleado_id)
VALUES ('$accion','$fecha_actual',$idempleadobit)";
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
if(isset($_POST['modificar_Perfil'])){
$idusuario=$_POST['id_usuario'];
$idcliente=$_POST['id_cliente'];
$usuario=$_POST['modusuario'];
$contra=md5($_POST['modcontra']);
$correo=$_POST['modcorreo'];
$direccion=$_POST['moddireccion'];
$identidad=$_POST['modidentidad'];
$telefono=$_POST['modtelefono'];
$foto=$_FILES['Foto']['name'];
$temporal=$_FILES['Foto']['tmp_name'];
$carpeta='../img';
$ruta=$carpeta.'/'.$foto;
move_uploaded_file($temporal,$carpeta.'/'.$foto);

$consulta1="UPDATE tbl_usuario
SET usuario='$usuario', password='$contra', foto_perfil='$ruta'
WHERE id_usuario= $idusuario;";

$consulta2="UPDATE tbl_cliente
SET  Num_Telefono='$telefono', Email='$correo', Direccion='$direccion', N_identidad='$identidad'
WHERE id_cliente=$idcliente;";

mysqli_query($conn,$consulta1);
mysqli_query($conn,$consulta2);
    #recargamos la pagina
    header('Location: Perfil.php');

}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php 
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['modificar_Perfilempleado'])){
$idusuario=$_POST['id_usuarioe'];
$idempleado=$_POST['id_empleado'];
$usuario=$_POST['modusuarioe'];
$contra=md5($_POST['modcontrae']);
$correo=$_POST['modcorreoe'];
$direccion=$_POST['moddireccione'];
$identidad=$_POST['modidentidade'];
$telefono=$_POST['modtelefonoe'];
$foto=$_FILES['Foto']['name'];
$temporal=$_FILES['Foto']['tmp_name'];
$carpeta='../img';
$ruta=$carpeta.'/'.$foto;
move_uploaded_file($temporal,$carpeta.'/'.$foto);

$consulta1="UPDATE tbl_usuario
SET usuario='$usuario', password='$contra', foto_perfil='$ruta'
WHERE id_usuario= $idusuario;";

mysqli_query($conn,$consulta1);

$consulta2="UPDATE tbl_empleado
SET N_identidad='$identidad', Direccion='$direccion', Num_Telefono='$telefono', Email='$correo' 
WHERE id_empleado= $idempleado";

mysqli_query($conn,$consulta2);
#recargamos la pagina
header('Location: Perfil.php');


}else{
    echo 'fallo algo';
}
 }else{

    exit("Token Invalido...");
}

?>

<?php
if($_POST['token']==$_SESSION['token']){

if(isset($_POST['update_carrito'])){
$idproducto=$_POST['idproducto'];
$cantidad=$_POST['cantidad'];
$producto=$_POST['producto'];
$cantidadcompra=$_POST['cantidadcompra'];
$precio=['precio'];
$idus=$_POST['idusuario'];
$fecha_actual = date("Y-m-d");

$consulta1="UPDATE tbl_productos
SET Cantidad=$cantidad-$cantidadcompra
WHERE id_producto=$idproducto;";

$consulta2="INSERT INTO tbl_carrito(Producto_id,Fecha_compra,Cantidad,Cliente_id) values($idproducto,'$fecha_actual',$cantidadcompra,$idus);";

mysqli_query($conn,$consulta1);
mysqli_query($conn,$consulta2);

$consult="SELECT * from tbl_cliente WHERE Usuario_id=$idus;";
if($result = $conn->query($consult)){
    While($row = $result->fetch_assoc()){
        $cliente=$row['id_cliente'];

        $historial="INSERT into tbl_historial(cantidad,producto_id,cliente_id) values($cantidadcompra,$idproducto,$cliente);";
        mysqli_query($conn,$historial);
    }
}
    #recargamos la pagina
    header('Location: Crear.php');
}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['Agregar_acarro'])){
$idproducto=$_POST['idproducto'];
$cantidad=$_POST['cantidad'];
$producto=$_POST['producto'];
$cantidadcompra=$_POST['cantidadcompra'];
$precio=['precio'];
$idus=$_POST['idusuario'];
$fecha_actual = date("Y-m-d");

$consulta1="UPDATE tbl_productos
SET Cantidad=$cantidad-$cantidadcompra
WHERE id_producto=$idproducto;";

$consulta2="INSERT INTO tbl_carrito(Producto_id,Fecha_compra,Cantidad,Cliente_id) values($idproducto,'$fecha_actual',$cantidadcompra,$idus);";

mysqli_query($conn,$consulta1);
mysqli_query($conn,$consulta2);

$consult="SELECT * from tbl_cliente WHERE Usuario_id=$idus;";
if($result = $conn->query($consult)){
    While($row = $result->fetch_assoc()){
        $cliente=$row['id_cliente'];

        $historial="INSERT into tbl_historial(cantidad,producto_id,cliente_id) values($cantidadcompra,$idproducto,$cliente);";
        mysqli_query($conn,$historial);
    }
}

    #recargamos la pagina
    header('Location: Cliente.php');
}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['update_tarea'])){
$idtarea=$_POST['modidtarea'];
$tarea=$_POST['modtarea'];
$descripcion=$_POST['modDescripcion'];
$fechainicio=$_POST['modFecha_inicio'];
$fechafin=$_POST['modFecha_fin'];
$estado=$_POST['estado'];
$empleado=$_POST['modempleado'];

$consulta="UPDATE tbl_tareas
SET Tarea='$tarea', Descripcion='$descripcion', Fecha_inicio='$fechainicio', Fecha_fin='$fechafin',
Estado=$estado, empleado_id=$empleado
WHERE id_tarea= $idtarea";

mysqli_query($conn,$consulta);

// header('location: Tareas.php');
echo '<script type="text/javascript">alert("La tarea se modificó de manera exitosa.");</script>'; 
echo '<script> window.location="Tareas.php"; </script>';

}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>


<?php
if($_POST['token']==$_SESSION['token']){
#insert para Tareas
if(isset($_POST['crear_tarea'])){
$tarea=$_POST['tarea'];
$descripcion=$_POST['Descripcion'];
$fechainicio=$_POST['Fecha_inicio'];
$fechafin=$_POST['Fecha_fin'];
$empleado=$_POST['empleado'];
$estado=20;

$consulta="INSERT INTO tbl_tareas(Tarea,Descripcion,Fecha_inicio,Fecha_fin,Estado,empleado_id) 
VALUES('$tarea','$descripcion','$fechainicio','$fechafin', $estado, $empleado)";

mysqli_query($conn,$consulta);

// header('location: Tareas.php');
echo '<script type="text/javascript">alert("La tarea se Creó de manera exitosa.");</script>'; 
echo '<script> window.location="Tareas.php"; </script>';


}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>

<?php
if(isset($_POST['Pago_carrito'])){
$idusuario=$_POST['id_usuario'];
$idproducto=$_POST['id_producto'];
$idcarro=$_POST['id_carro'];
$pago=$_POST['tarjeta'];
$estado=$_POST['estado'];
$idtipopago=$_POST['tipopago'];
$descripcionfactura="Pago de compra";
$codigofactura="Compra";
$pagototal=$_POST['Total'];
$fecha_actual = date("Y-m-d");
$length=10;
$comprobante=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$canti=$_POST['Total'];
$idfactura=rand(1,5000);

$consu="SELECT Precio FROM tbl_productos WHERE id_producto=$idproducto;";
if($result = $conn->query($consu)){
    While($row = $result->fetch_assoc()){
        $precio=$row['Precio'];

        $consultacliente="SELECT id_cliente FROM tbl_cliente WHERE Usuario_id=$idusuario;";

        if($resultado = $conn->query($consultacliente)){
            While($linea = $resultado->fetch_assoc()){
                $cli=$linea['id_cliente'];


        $consulta1="INSERT INTO tbl_pago(Pago,Total,Estado,Fecha,comprobante,metodo_id,usuario_id) 
        VALUES('$pago',$precio,'$estado','$fecha_actual','$comprobante',$idtipopago,$idusuario)";

        mysqli_query($conn,$consulta1);

        $consulta2="DELETE FROM tbl_carrito WHERE id_carrito=$idcarro";

        $Historial="INSERT INTO tbl_historial(cantidad,producto_id,cliente_id) VALUES($canti,$idproducto,$cli)";

        mysqli_query($conn,$consulta2);

        mysqli_query($conn,$Historial);


        $consulta3="INSERT INTO tbl_factura(id_factura,Fecha_factura,Codigo,Descripcion,Total,FP_id) 
                    VALUES($idfactura,'$fecha_actual','$codigofactura','$descripcionfactura',$pagototal,$idtipopago);";
                    mysqli_query($conn,$consulta3);
        // header('Location: Carritodecompras.php');

        echo '<script type="text/javascript">alert("El Pago se realizó de manera exitosamente.");</script>'; 
        echo '<script> window.location="Carritodecompras.php"; </script>';


            }
            $resultado->free();
        }

    }
    $result->free();

}


}else{
    echo 'fallo algo';
}
?>

<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['Pago_tienda'])){
    $length=10;
    $comprobante=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    $fecha_actual = date("Y-m-d");
    $estado=$_POST['estado'];
    $idusuario=$_POST['id_usuario'];
    $pago=$_POST['Total'];
    $descripcionfactura="Pago de compra";
    $codigofactura="Compra";
    $idtipopago=$_POST['tipopago'];
    $idproducto=$_POST['id_producto'];
    $cantid=$_POST['cantidad'];
    $idcarro=$_POST['id_carro'];
    $idfactura=rand(1,5000);
    $tarjeta=$_POST['tarjeta'];

    $consultacliente="SELECT id_cliente FROM tbl_cliente WHERE Usuario_id=$idusuario;";
    if($resultado = $conn->query($consultacliente)){
        While($linea = $resultado->fetch_assoc()){
            $cli=$linea['id_cliente'];

                    // $consultacarrito="SELECT Producto_id,Cantidad FROM tbl_carrito WHERE Cliente_id = $cli;";
                    //  if($result= $conn->query($consultacarrito)){
                    //     While($row = $result->fetch_assoc()){
                    //         $producto=$row['Producto_id'];
                    //          $cantidadcompra=$row['Cantidad'];


                    // $Historial="INSERT INTO tbl_historial(cantidad,producto_id,cliente_id) VALUES($cantid,$idproducto,$cli);";
                    //   mysqli_query($conn,$Historial);
                    
                    

                    
            //      }
            //      $result->free();
            //  }
                
                    $consulta1="INSERT INTO tbl_pago(Pago,Total,Estado,Fecha,comprobante,metodo_id,usuario_id) 
                    VALUES('$tarjeta',$pago,'$estado','$fecha_actual','$comprobante',$idtipopago,$idusuario)";
                    mysqli_query($conn,$consulta1);

                    $consulta2="INSERT INTO tbl_factura(id_factura,Fecha_factura,Codigo,Descripcion,Total,FP_id) 
                    VALUES($idfactura,'$fecha_actual','$codigofactura','$descripcionfactura',$pago,$idtipopago);";
                    mysqli_query($conn,$consulta2);

                    $consulta3="DELETE FROM tbl_carrito WHERE Cliente_id=$idusuario";
                    mysqli_query($conn,$consulta3);

                    echo '<script type="text/javascript">alert("El Pago se realizó de manera exitosamente.");</script>'; 
                    echo '<script> window.location="Carritodecompras.php"; </script>';

            

        }
        $resultado->free();
    }
}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>


<?php
if($_POST['token']==$_SESSION['token']){
if(isset($_POST['mod_cantcarrito'])){
$idcarro=$_POST['idmodcarro'];
$cantidadmod=$_POST['cantidad'];

$consulta="UPDATE tbl_carrito
SET Cantidad=$cantidadmod
WHERE id_carrito=$idcarro";
mysqli_query($conn,$consulta);

header('Location: Carritodecompras.php');


}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>