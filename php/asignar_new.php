<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id_equipo = $_POST['equipo'];
$rack_pos = $_POST['slot'];
$id_sucursal = $_POST['suc'];

$sql = "UPDATE equipo SET rack_pos='$rack_pos' WHERE id_equipo='$id_equipo'";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Rack Registrado Correctamente");
    window.location.href="../racks.php?id='.$id_sucursal.'";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Asignar el Equipo al Slot | '.$con->mysqli_error.'");
    window.location.href="../racks.php?id='.$id_sucursal.'";</script>';
}
?>