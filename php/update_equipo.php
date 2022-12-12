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

        $sql = 
        "UPDATE
            `equipo`
        SET
        `id_rack` = '$id_rack',
        `marca_equ` = '$marca_equ',
        `modelo_equ` = '$modelo_equ',
        `id_rol` = '$rol_equ',
        `cant_puertos_equ` = '$cant_puertos_equ',
        `ip_equ` = '$ip_equ',
        `doble_fuente_equ` = '$doble_fuente_equ',
        `backup_equ` = '$backup_equ',
        `monitoreo_equ` = '$monitoreo_equ',
        `c_usuario_equ` = '$c_usuario_equ',
        `c_password_equ` = '$c_password_equ',
        `estado_equ` = '$estado_equ'
        WHERE
        `id_equipo`='$id'";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Equipo Registrado Correctamente");
    window.location.href="../equipos.php";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Registrar El Equipo | '.$con->mysqli_error.'");
    window.location.href="../equipos.php";</script>';
}
