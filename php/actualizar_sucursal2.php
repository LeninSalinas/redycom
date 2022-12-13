<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id=$_GET['id'];
$nombre_suc = $_POST['nombre'];
$ubicacion_suc = $_POST['ubicacion'];
$telefono_suc = $_POST['telefono'];
$estado_suc = $_POST['status'];

$sql = 
"UPDATE
`sucursal`
SET
`nombre_suc` = '$nombre_suc',
`ubicacion_suc` = '$ubicacion_suc',
`telefono_suc` = '$telefono_suc',
`estado_suc` = '$estado_suc'
WHERE
id_sucursal='$id'";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Sucursal Registrada Correctamente");
    window.location.href="../tabla_sucursal.php";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Registrar La Sucursal | '.$con->mysqli_error.'");
    window.location.href="../tabla_sucursal.php";</script>';
}
?>