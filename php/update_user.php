<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id=$_GET['id'];
$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$nombre_usr = $_POST['sucursal'];
$apellido_usr = $_POST['nombre'];
$email_usr = $_POST['c_slot'];
$passwrod_usr = $_POST['estado'];

$sql = 
"UPDATE
    `usuario`
SET
`foto` = '$foto',
`nombre_usr` = '$nombre_usr',
`apellido_usr` = '$apellido_usr',
`email_usr` = '$email_usr',
`passwrod_usr` = '$passwrod_usr',
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