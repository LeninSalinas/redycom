<?php
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Nuevo Equipo";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php'; ?>

<body class="skin-default fixed-layout">
    <?php //include_once 'loader.php';
    ?>
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Registro de Equipo</h4>
                                <?php
                                $code = $_GET['id'];
                                $sql2 = $con->query("select * from equipo where `id_equipo`='$code'");
                                while ($fila = $sql2->fetch_array()) {
                                ?>
                                    <form class="form" method="POST" action="php/new_equipo.php?id=<?php echo $code ?>">
                                        <div class="form-group m-t-40 row">
                                            <label for="example-text-input" class="col-2 col-form-label">Rack</label>
                                            <div class="col-10">
                                                <select class="custom-select col-12" id="inlineFormCustomSelect" name="rack" required>
                                                    <?php
                                                    $sql = $con->query("SELECT * FROM rack WHERE estado_rack = 1");
                                                    while ($rows = $sql->fetch_array()) {
                                                    ?>
                                                        <option value="<?php echo $rows['id_rack']; ?>"><?php echo $rows['nombre_rack']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40 row">
                                            <label for="example-text-input" class="col-2 col-form-label">Marca</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="marca" value="<?php echo $fila['marca_equ']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40 row">
                                            <label for="example-text-input" class="col-2 col-form-label">Modelo</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="modelo" value="<?php echo $fila['modelo_equ']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-month-input" class="col-2 col-form-label">Rol</label>
                                            <div class="col-10">
                                                <select class="custom-select col-12" id="inlineFormCustomSelect" name="rol" required>
                                                    <?php
                                                    $sql = $con->query("SELECT * FROM rol WHERE estado_rol = 1");
                                                    while ($rows = $sql->fetch_array()) {
                                                    ?>
                                                        <option value="<?php echo $rows['id_rol'];
                                                                        if ($row['nombre_rol'] == $row['nombre_rol']) {
                                                                            echo "selected";
                                                                        } ?>"><?php echo $rows['nombre_rol']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40 row">
                                            <label for="example-text-input" class="col-2 col-form-label">Cantidad Puertos</label>
                                            <div class="col-10">
                                                <input class="form-control" type="number" name="c_puertos" value="<?php echo $fila['cant_puertos_equ']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40 row">
                                            <label for="example-text-input" class="col-2 col-form-label">Direccion IP</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control" id="ipv4" name="ip" placeholder="255.255.255.255" value="<?php echo $fila['ip_equ']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40 row">
                                            <label for="example-text-input" class="col-2 col-form-label">Doble Fuente</label>
                                            <div class="col-10">
                                                <div class="input-group">
                                                    <ul class="icheck-list">
                                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="<?php if ($fila['doble_fuente_equ'] == "1") {echo "checked";} ?>" name="d_fuente">
                                                        <label for="minimal-radio-1">Si</label>
                                                    </ul>
                                                    <ul class="icheck-list">
                                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="<?php if ($fila['doble_fuente_equ'] == "0") {echo "checked";} ?>" checked name="d_fuente">
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
                                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="<?php if ($fila['backup_equ'] == "1") {echo "checked";} ?>" name="backup">
                                                        <label for="minimal-radio-1">Si</label>
                                                    </ul>
                                                    <ul class="icheck-list">
                                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="<?php if ($fila['backup_equ'] == "0") {echo "checked";} ?>" checked name="backup">
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
                                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="<?php if ($fila['monitoreo_equ'] == "1") {echo "checked";} ?>" name="monitoreo">
                                                        <label for="minimal-radio-1">Si</label>
                                                    </ul>
                                                    <ul class="icheck-list">
                                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="<?php if ($fila['monitoreo_equ'] == "0") {echo "checked";} ?>" name="monitoreo">
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
                                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="<?php if ($fila['estado_equ'] == "1") {echo "checked";} ?>" name="estado">
                                                        <label for="minimal-radio-1">Activo</label>
                                                    </ul>
                                                    <ul class="icheck-list">
                                                        <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="<?php if ($fila['estado_equ'] == "0") {echo "checked";} ?>" name="estado">
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
                                                <input class="form-control" type="text" name="usuario" value="<?php echo $fila['c_usuario_equ']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40 row">
                                            <label for="example-text-input" class="col-2 col-form-label">Password</label>
                                            <div class="col-10">
                                                <input class="form-control" type="password" name="password" value="<?php echo $fila['c_password_equ']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40 row">
                                            <a href="#"><button class="btn btn-danger waves-effect waves-light m-r-10">Cancelar</button></a>
                                            <button type="reset" class="btn btn-warning waves-effect waves-light m-r-10">Vaciar</button>
                                            <input type="submit" value="Registrar">
                                        </div>
                                    </form>
                                <?php
                                }
                                ?>
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
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script id="rendered-js">
        //input mask bundle ip address
        var ipv4_address = $('#ipv4');
        ipv4_address.inputmask({
            alias: "ip",
            greedy: false //The initial mask shown will be "" instead of "-____".
        });
        //# sourceURL=pen.js
    </script>
</body>

</html>