<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id=$_GET['id'];
$nombre_rol = $_POST['nombre'];
$descripcion_rol = $_POST['detalle'];
$estado_rol = $_POST['status'];

$sql = "UPDATE
`rol`
SET
`nombre_rol` = '$nombre_rol',
`descripcion_rol` = '$descripcion_rol',
`estado_rol` = '$estado_rol'
WHERE
id_rol='$id'";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Rol Registrado Correctamente");
    window.location.href="../rol_nuevo.php";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Registrar La Rol | '.$con->mysqli_error.'");
    window.location.href="../rol_nuevo.php";</script>';
}
?>