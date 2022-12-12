<?php 
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$id_sucursal = $_GET['id'];

$titulo = "RACKS";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php';?>
<body class="skin-default fixed-layout">   
    <?php include_once 'loader.php';?>
    <div id="main-wrapper">
        <?php 
        include_once 'top_bar.php';
        include_once 'navbar.php';
        include_once 'ventanas/asignar_equipo.php';
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-12">
                        <h4 class="text-dark"><?php echo $titulo;?></h4>
                    </div>
                    <div class="col-md-6 text-right">

                    </div>
                </div>
                <div class="row">
                    <?php 
                    $sql = $con->query("SELECT * FROM rack WHERE rack.id_sucursal='$id_sucursal'");
                    while ($rows = $sql->fetch_array()){
                    ?>
                    <div class="col-md-4 col-sm-4 p-20">
                        <h4 class="card-title"><?php echo $rows['nombre_rack'];?></h4>
                        <ul class="list-group list-group-full">
                            <?php 
                            $id_rack = $rows['id_rack'];
                            
                            for($x=1;$x<=$rows['ranuras_rack'];$x++){
                                $sql2 = $con->query("SELECT * FROM equipo WHERE id_rack='$id_rack' AND rack_pos='$x'");
                                if($equ = $sql2->fetch_array()){
                                    
                                ?>
                            <li class="list-group-item"><?php echo nombre_rol($equ['id_rol'])."-".$equ['marca_equ']?> | 
                                <span class="badge badge-info" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="# Puertos: <?php echo $equ['cant_puertos_equ'];?> IP: <?php echo $equ['ip_equ'];?>" data-original-title="Informacion" aria-describedby="popover401898"><i class="fa fa-info"></i></span>
                                <a href="datos_equipo.php?id=<?php echo $equ['id_equipo'];?>"><span class="badge badge-primary"><i class="fa fa-eye"></i></span></a>
                            </li>
                                <?php
                                }else{
                                ?>
                            <li class="list-group-item">Slot Vacio |
                                <span class="badge badge-success" onclick="asignar('<?php echo $x; ?>','<?php echo $id_sucursal;?>')"><i class="fa fa-plus"></i></span>
                            </li>
                                <?php
                                }
                            ?>
                            
                            <?php } ?>
                        </ul>
                    </div>
                    <?php }?>
                </div>
                <?php include_once 'rightbar.php';?>
            </div>
        </div>
        <?php include_once 'footer.php';?>
    </div>
    <?php include_once 'scripts.php'; ?>
    <script>
    function asignar(id, suc){
	  var options = {
			modal: true,
			height:300,
			width:600
		};
	  $('#contenido').load('ajax/datos_equipo.php?id='+id+'&suc='+suc, function() {
		$('#AsignarEquipo').modal({show:true});
    });
    }
    </script>
</body>
</html>