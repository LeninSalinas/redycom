<?php
require_once '../config/db.php';
require_once '../config/conexion.php';
require_once 'accesos.php';
require_once 'funciones.php';

$id_equip = $_POST['nomequipos'];
$asunto_bit = $_POST['asunto'];
$descripcion_bit = $_POST['descripcion'];
$fecha_bit = $_POST['fecha'];
$id_usr = $_POST['user'];
$estado_bit = $_POST['estado'];

$sql_query = "INSERT INTO `bitacora`(`id_equipo`, `asunto_bit`, `descripcion_bit`, `fecha_bit`, `id_usr`, `estado_bit`)
                              VALUES('$id_equip','$asunto_bit','$descripcion_bit','$fecha_bit','$id_usr','$estado_bit')";
try {

    if ($con->query($sql_query) === TRUE) {
        echo "<script>alert('Se registro exitosamente')</script>";
        echo "<meta http-equiv='refresh' content='1;url=preguntas.php'>";
    } else
        echo "Error al intentar crear el registro";
} catch (\Throwable $th) {
    echo "Error al intentar crear el registro" . $th;
}
?>