<?php 
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Detalle Sucursal";

$id_sucursal = $_GET['id'];
//aquuuuuui
$sql = $con->query("SELECT * FROM sucursal WHERE id_sucursal='$id_sucursal'");
$sucursal = $sql->fetch_array();
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
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="recursos/img/sucursal_icon.png" class="img" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $sucursal['nombre_suc'];?></h4>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="racks.php?id=<?php echo $id_sucursal; ?>" class="link"><i class="icon-layers"></i> <font class="font-medium">1</font></a></div>
                                        <div class="col-4"><a href="equipos.php" class="link"><i class="icon-drawar"></i> <font class="font-medium">1</font></a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body">
                                <div class="map-box">
                                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=<?php echo $sucursal['ubicacion_suc']; ?>&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div> <small class="text-muted p-t-30 db">Ubicacion GPS</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#informacion" role="tab">Informacion</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#editar" role="tab">Actualizar</a> </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="informacion" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong># Racks</strong>
                                                <br>
                                                <p class="text-muted">1</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong># Equipos</strong>
                                                <br>
                                                <p class="text-muted">1</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Telefono</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $sucursal['telefono_suc']?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Coordenadas</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $sucursal['ubicacion_suc']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="m-t-30">Ranuras Usadas <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Racks Activos <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Equipos Activos <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="editar" role="tabpanel">
                                    <div class="card-body">
                                    <form class="form-material m-t-40" method="POST" action="php/edit_sucursal.php?id=<?php echo $id_sucursal;?>">
                                    <div class="form-group">
                                        <label for="example-email">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $sucursal['nombre_suc'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">Ubicacion</label>
                                        <input type="text" id="ubicacion" name="ubicacion" class="form-control"value="<?php echo $sucursal['ubicacion_suc'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">Telefono</label>
                                        <input type="text" id="telefono" name="telefono" class="form-control" value="<?php echo $sucursal['telefono_suc'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control" name="status" required>
                                            <?php if($sucursal['estado_suc']==1){
                                                $select1="selected";
                                                $select0="";
                                            }else{
                                                $select0="selected";
                                                $select1="";
                                            }
                                            ?>
                                            <option value="1" <?php echo $select1;?>>Habilitado</option>
                                            <option value="0" <?php echo $select0;?>>Desabilitado</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <input hidden type="number" name="id" value="<?php echo $id_sucursal;?>" required>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Actualizar</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
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