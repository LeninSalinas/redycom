<?php

require_once 'config/db.php';
require_once 'config/conexion.php';

$rol=$_POST['rol'];
$detalle=$_POST['detalle'];
$status=$_POST['status'];


    $sql_query="INSERT INTO `rol`( `nombre_rol`, `descripcion_rol`, `estado_rol`)
                                    VALUES ('$rol','$detalle','$status')";     
    try {      
           
   if($con->query($sql_query) === TRUE) 
   {
      echo"<script>alert('Se registro exitosamente')</script>";
      echo"<meta http-equiv='refresh' content='1;url=rol_nuevo.php'>";
    }
   else
     echo"Error al intentar crear el registro"; 
    } catch (\Throwable $th) {
      echo"Error al intentar crear el registro".$th;
    } 


