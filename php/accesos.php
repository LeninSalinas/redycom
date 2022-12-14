<?php
date_default_timezone_set('America/Guatemala');

session_start();
if (!isset($_SESSION['user_login_status'])) {
    header('location: login.php');
}else{
    $id_usr = $_SESSION['id_usr'];
    $nivel_usr = $_SESSION['nivel_usr'];
    $fullnameUser = $_SESSION['f_name'];
}



?>