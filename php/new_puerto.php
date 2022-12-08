<?php
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id_equip = $_POST['nomequipos'];
$num_port = $_POST['numpuerto'];
$nombre_port = $_POST['nompuerto'];
$estado_port = $_POST['estado'];

$sql_query = "INSERT INTO `puerto`(`id_equipo`, `num_port`, `nombre_port`, `estado_port`)
                            VALUES('$id_equip','$num_port','$nombre_port','$estado_port')";
try {

    if ($con->query($sql_query) === TRUE) {
        echo "<script>alert('Se registro exitosamente')</script>";
        echo "<meta http-equiv='refresh' content='1;url=php/crearpuertos.php'>";
    } else
        echo "Error al intentar crear el registro";
} catch (\Throwable $th) {
    echo "Error al intentar crear el registro" . $th;
}
?>