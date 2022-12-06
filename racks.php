<?php 
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

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
                    <div class="col-md-4 col-sm-4 p-20">
                        <h4 class="card-title">Rack 1</h4>
                        <ul class="list-group list-group-full">
                            <li class="list-group-item">Ocupado 
                                <span class="tooltip-item" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="Puertos" data-original-title="Informacion" aria-describedby="popover401898"><i class="fa fa-info"></i></span>
                                <span class="tooltip-item"><i class="fa fa-eye"></i></span>
                            </li>
                            <li class="list-group-item"> Vacio <button type="button" onclick="asignar('1')" class="btn btn-success btn-circle" data-toggle="modal" data-target="#AsignarEquipo"><i class="fa fa-plus"></i></button></li>
                        </ul>
                    </div>
                </div>
                <?php include_once 'rightbar.php';?>
            </div>
        </div>
        <?php include_once 'footer.php';?>
    </div>
    <?php include_once 'scripts.php'; ?>
    <script>
    function asignar(id){
	  var options = {
			modal: true,
			height:300,
			width:600
		};
	  $('#contenido').load('ajax/datos_equipo.php?id='+id, function() {
		$('#AsignarEquipo').modal({show:true});
    });
    }
    </script>
</body>
</html>