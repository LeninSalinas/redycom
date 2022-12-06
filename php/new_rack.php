<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id_sucursal = $_POST['sucursal'];
$nombre_rack = $_POST['nombre'];
$ranuras_rack = $_POST['c_slot'];
$estado_rack = $_POST['estado'];

$sql = "INSERT INTO rack (id_sucursal,nombre_rack,ranuras_rack,estado_rack)
                      VALUES ($id_sucursal,'$nombre_rack',$ranuras_rack,$estado_rack)";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Rack Registrado Correctamente");
    window.location.href="../racks.php?id='.$id_sucursal.'";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Registrar El Rack | '.$con->mysqli_error.'");
    window.location.href="../rack_nuevo.php";</script>';
}
?>