<?php

require_once 'config/db.php';
require_once 'config/conexion.php';

$nombre=$_POST['nombre'];
$ubicacion=$_POST['ubicacion'];
$telefono=$_POST['telefono'];
$status=$_POST['status'];


    $sql_query="INSERT INTO `sucursal`( `nombre_suc`, `ubicacion_suc`, `telefono_suc`, `estado_suc`)
                                    VALUES ('$nombre','$ubicacion','$telefono','$status')";     
    try {      
           
   if($con->query($sql_query) === TRUE) 
   {
      echo"<script>alert('Se registro exitosamente')</script>";
      echo"<meta http-equiv='refresh' content='1;url=sucursal_nueva.php'>";
    }
   else
     echo"Error al intentar crear el registro"; 
    } catch (\Throwable $th) {
      echo"Error al intentar crear el registro".$th;
    } 