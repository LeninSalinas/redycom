<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

//$foto=addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$nombre_usr = $_POST['user'];
$apellido_usr = $_POST['apellido'];
$email_usr = $_POST['email'];
$passwrod_usr = $_POST['password'];

$sql = "INSERT INTO `usuario`(`nombre_usr`, `apellido_usr`, `email_usr`, `passwrod_usr`)
                      VALUES ('$nombre_usr','$email_usr','$email_usr','$passwrod_usr')";

if($con->query($sql)==true){
    echo '<script type="text/javascript">;
    alert("Usuario Registrado Correctamente");
    window.location.href="../user.php";</script>';
}else{
    echo '<script type="text/javascript">;
    alert("Error! Al Registrar El Usuario | '.$con->mysqli_error.'");
    window.location.href="../user_nuevo.php";</script>';
}
?>