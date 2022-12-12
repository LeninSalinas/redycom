<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id=$_GET['id'];
$id_rack = $_POST['rack'];
$marca_equ = $_POST['marca'];
$modelo_equ = $_POST['modelo'];
$rol_equ = $_POST['rol'];
$cant_puertos_equ = $_POST['c_puertos'];
$ip_equ = $_POST['ip'];
$doble_fuente_equ = $_POST['d_fuente'];
$backup_equ = $_POST['backup'];
$monitoreo_equ = $_POST['monitoreo'];
$estado_equ = $_POST['estado'];
$c_usuario_equ = $_POST['usuario'];
$c_password_equ = $_POST['password'];

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