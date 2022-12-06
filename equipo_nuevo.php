<?php 
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Nuevo Equipo";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php';?>
<body class="skin-default fixed-layout">   
    <?php //include_once 'loader.php';?>
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Registro de Equipo</h4>
                                <form class="form" method="POST" action="php/new_equipo.php">
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Rack</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect" name="rack" required>
                                                <?php 
                                                $sql = $con->query("SELECT * FROM rack WHERE estado_rack = 1");
                                                while ($rows = $sql->fetch_array()){
                                                ?>
                                                <option value="<?php echo $rows['id_rack'];?>"><?php echo $rows['nombre_rack'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Marca</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="marca" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Modelo</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="modelo" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Rol</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect" name="rol" required>
                                                <?php 
                                                $sql = $con->query("SELECT * FROM rol WHERE estado_rol = 1");
                                                while ($rows = $sql->fetch_array()){
                                                ?>
                                                <option value="<?php echo $rows['id_rol'];?>"><?php echo $rows['nombre_rol'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Cantidad Puertos</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" name="c_puertos" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Direccion IP</label>
                                        <div class="col-10">
                                            <input type="text" placeholder="" data-mask="999.999.999.999" class="form-control" name="ip" required>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Doble Fuente</label>
                                        <div class="col-10">
                                            <div class="input-group">
                                                <ul class="icheck-list">
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="true" name="d_fuente">
                                                    <label for="minimal-radio-1">Si</label>
                                                </ul>
                                                <ul class="icheck-list">
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="false" checked name="d_fuente">
                                                    <label for="minimal-radio-1">No</label>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Existe BackUp de Configuracios</label>
                                        <div class="col-10">
                                            <div class="input-group">
                                                <ul class="icheck-list">
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="true" name="backup">
                                                    <label for="minimal-radio-1">Si</label>
                                                </ul>
                                                <ul class="icheck-list">
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="false" checked name="backup">
                                                    <label for="minimal-radio-1">No</label>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Monitoreo</label>
                                        <div class="col-10">
                                            <div class="input-group">
                                                <ul class="icheck-list">
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="true" name="monitoreo">
                                                    <label for="minimal-radio-1">Si</label>
                                                </ul>
                                                <ul class="icheck-list">
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="false" checked name="monitoreo">
                                                    <label for="minimal-radio-1">No</label>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Estado</label>
                                        <div class="col-10">
                                            <div class="input-group">
                                                <ul class="icheck-list">
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="true" checked name="estado">
                                                    <label for="minimal-radio-1">Activo</label>
                                                </ul>
                                                <ul class="icheck-list">
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="false"  name="estado">
                                                    <label for="minimal-radio-1">Inactivo</label>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4>Credenciales de Acceso</h4>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Usuario</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="usuario" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Password</label>
                                        <div class="col-10">
                                            <input class="form-control" type="password" name="password" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <a href="#"><button class="btn btn-danger waves-effect waves-light m-r-10">Cancelar</button></a>
                                        <button type="reset" class="btn btn-warning waves-effect waves-light m-r-10">Vaciar</button>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Registrar</button>
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
    <script src="js/pages/mask.js"></script>
</body>
</html>