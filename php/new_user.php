<?php 
require_once '../config/db.php';
require_once '../config/conexion.php';
//require_once 'accesos.php';
require_once 'funciones.php';

$nombre_usr = $_POST['user'];
$apellido_usr = $_POST['apellido'];
$email_usr = $_POST['email'];
$passwrod_usr = $_POST['password'];

$password_encrip = password_hash($passwrod_usr, PASSWORD_DEFAULT);

$archivo = $_FILES['fotos']['tmp_name'];
$ext = strtolower(pathinfo($_FILES['fotos']['name'], PATHINFO_EXTENSION));
$foto = "recursos/img/".$email_usr.".".$ext;
$destino = "../".$foto;

$sql = "INSERT INTO usuario (nombre_usr, apellido_usr, email_usr, passwrod_usr, estado_usr, foto)
                      VALUES ('$nombre_usr','$apellido_usr','$email_usr','$password_encrip','1','$foto')";
             
if($con->query($sql)==true){

    $copy=copy($archivo,$destino);

    if($copy){
        echo '<script type="text/javascript">;
        alert("Usuario Registrado Correctamente");
        window.location.href="../user.php";</script>';
    }else{
        echo '<script type="text/javascript">;
        alert("Error! Subir la Foto del Usuario | '.$con->mysqli_error.'");
        window.location.href="../user_nuevo.php";</script>';
    }

}else{
    
    echo '<script type="text/javascript">;
    alert("Error! Al Registrar El Usuario | '.$con->mysqli_error.'");
    window.location.href="../user_nuevo.php";</script>';
    
}
