<?php
#vincular el archivo de la BD
include 'Cone/conexion.php';

#incluimos la zona horaria
date_default_timezone_set('America/Guatemala');

session_start();

if($_POST['token']==$_SESSION['token']){
if(isset($_POST['send'])){
 $id=rand(1,5000);
 $cod=$_POST['Codigo'];
 $nombre=$_POST['Nombre'];
 $precio=$_POST['Precio'];
 $descripcion=$_POST['Descripcion'];
 $fechaelab=$_POST['Fechaelab'];
 $fechavence=$_POST['Fechaven'];
 $cantidad=$_POST['Cantidad'];
 $marcapre=$_POST['Marca'];
 $marcapru=003;
 $foto=$_FILES['Foto']['name'];
 $temporal=$_FILES['Foto']['tmp_name'];
 $carpeta='../img';
 $ruta=$carpeta.'/'.$foto;
 move_uploaded_file($temporal,$carpeta.'/'.$foto);
 $tipo=$_POST['Tipoproducto'];
 $oferta=001;
 $idusuario=$_POST['usuarioid'];
 $accion="Agregó Inventario";
 $fecha_actual = date("Y-m-d");


// $consulta="select id_marca from tbl_marca WHERE Marca='$marcapre';";
//  if($result = $conn->query($consulta)){
//     While($row = $result->fetch_assoc()){
        // $marc= $row['id_marca'];
        $cons="INSERT INTO tbl_productos(id_producto,Codigo,Nombre_producto,Precio,Descripcion,Fecha_elab,Fecha_vence,Cantidad,Marca_id,Tipo_id,Foto,oferta_id) 
        Values ($id,'$cod','$nombre',$precio,'$descripcion','$fechaelab','$fechavence',$cantidad,$marcapre,$tipo,'$ruta',$oferta);";

    mysqli_query($conn,$cons);

        $bitacora="INSERT INTO tbl_bitacora(Accion,Fecha_realizado,Empleado_id)
        VALUES ('$accion','$fecha_actual',$idusuario)";

    mysqli_query($conn,$bitacora);

    #recargamos la pagina
    header('Location: Inventario.php');
//     }
//     $result->free();
//  }

}else{
    echo 'fallo algo';
}
}else{

    exit("Token Invalido...");
}
?>