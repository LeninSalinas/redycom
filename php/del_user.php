<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id=$_GET['id'];

$sql = 
"UPDATE
    `usuario`
SET
    `estado_usr` = '0'
WHERE
id_usr='$id'";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Usuario Actualizado Correctamente");
    window.location.href="../user.php";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Actualizar El Usuario | '.$con->mysqli_error.'");
    window.location.href="../user_nuevo.php";</script>';
}
?>