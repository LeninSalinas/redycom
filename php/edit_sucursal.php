<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id_sucursal = $_POST['id'];
$nombre_suc = $_POST['nombre'];
$ubicacion_suc = $_POST['ubicacion'];
$telefonp_suc = $_POST['telefono'];
$estado_suc = $_POST['status'];


$sql = "UPDATE sucursal SET nombre_suc='$nombre_suc', ubicacion_suc='$ubicacion_suc', telefono_suc='$telefonp_suc', estado_suc='$estado_suc' WHERE id_sucursal='$id_sucursal'";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Sucursal Actualizada Correctamente");
    window.location.href="../sucursal_detalle.php?id='.$id_sucursal.'";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Actualizar la Sucursal | '.$con->mysqli_error.'");
    window.location.href="../sucursal_detalle.php?id='.$id_sucursal.'";</script>';
}

?>