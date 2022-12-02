<?php
//require_once 'config/db.php';
//require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Editar Equipos";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php'; ?>
<link href="dist/css/style.min.css" rel="stylesheet">
<!-- page css -->
<link href="dist/css/pages/form-icheck.css" rel="stylesheet">

<body class="skin-default fixed-layout">
    <?php include_once 'loader.php'; ?>
    <div id="main-wrapper">
        <?php
        include_once 'top_bar.php';
        include_once 'navbar.php';
        ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-12">
                        <h4 class="text-dark"><?php echo $titulo; ?></h4>
                    </div>
                    <div class="col-md-6 text-right">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Actualizar datos de los equipos</h4>
                                <h6 class="card-subtitle"> <code></code></h6>
                                <form class="form-material m-t-40">
                                    <div class="form-group">
                                        <label for="example-email">Marca</label>
                                        <input type="text" id="rol" name="marca" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">Modelo <span class="help"></span></label>
                                        <input type="text" id="marca" name="modelo" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">Numero de Puertos <span class="help"></span></label>
                                        <input type="text" id="puertos" name="puertos" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>información sobre la Garantia</label>
                                        <input type="text" id="puertos" name="garantia" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Direccion IP</label>
                                        <input type="text" placeholder="" data-mask="9.9.9.9" class="form-control">
                                        <span class="font-13 text-muted">0.0.0.0</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Credenciales de acceso</label>
                                        <input type="password" id="puertos" name="garantia" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Si poseen doble fuente</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <ul class="icheck-list">
                                                    <li>
                                                        <input type="radio" class="check" id="flat-radio-2" name="radiof" data-radio="iradio_flat-red">
                                                        <label for="flat-radio-2">Si</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" class="check" id="flat-radio-2" name="radiof" data-radio="iradio_flat-red">
                                                        <label for="flat-radio-2">No</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Si se tiene Backup de la configuración</label>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <ul class="icheck-list">
                                                    <li>
                                                        <input type="radio" class="check" id="flat-radio-2" name="radiof" data-radio="iradio_flat-red">
                                                        <label for="flat-radio-2">Si</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" class="check" id="flat-radio-2" name="radiof" data-radio="iradio_flat-red">
                                                        <label for="flat-radio-2">No</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>status</label>
                                        <select class="form-control">
                                            <option>Habilitado</option>
                                            <option>Desabilitado</option>

                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Enviar</button>
                                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <?php include_once 'rightbar.php'; ?>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </div>
    <?php include_once 'scripts.php'; ?>
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="dist/js/pages/mask.js"></script>
    <!-- icheck -->
    <script src="../assets/node_modules/icheck/icheck.min.js"></script>
    <script src="../assets/node_modules/icheck/icheck.init.js"></script>
</body>

</html>