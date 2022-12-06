<?php 
//require_once 'config/db.php';
//require_once 'config/conexion.php';
//require_once 'php/accesos.php';
//require_once 'php/funciones.php';

$titulo = "Sucursal";
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
                <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sucursales </h4>
                                <h6 class="card-subtitle"> <code></code></h6>
                                <form class="form-material m-t-40">
                                    
                                    <div class="form-group">
                                        <label for="example-email">Nombre <span class="help"></span></label>
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder=""> </div>
                                    <div class="form-group">
                                        <label for="example-email">Ubicacion <span class="help"></span></label>
                                        <input type="text" id="ubi" name="ubi" class="form-control" placeholder=""> </div>
                                    <div class="form-group">
                                    <label for="example-email">Telefono <span class="help"></span></label>
                                        <input type="text" id="tell" name="tell" class="form-control" placeholder=""> </div>
                                    
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control">
                                            <option>Habilitado</option>
                                            <option>Desabilitado</option>
                                           
                                        </select>
                                    </div>
                                   
                                   
                                        
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php include_once 'rightbar.php';?>
            </div>
        </div>
        <?php include_once 'footer.php';?>
    </div>
    <?php include_once 'scripts.php'; ?>
</body>
</html>