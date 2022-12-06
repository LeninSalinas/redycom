<?php
function nombre_rol($id)
{
  global $con;
  $query = $con->query("SELECT nombre_rol FROM rol WHERE id_rol='$id'");
  $respuesta = $query->fetch_array();

  $rol=$respuesta['0'];
 
  return $rol;
}

?>