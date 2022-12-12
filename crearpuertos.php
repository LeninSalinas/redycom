<?php
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Puertos";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php'; ?>

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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Creacion de un puerto</h4>
                                <form class="form" method="POST" action="php/new_puerto.php">
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Nombre del equipo</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect" name="nomequipos" required>
                                                <?php
                                                $marca = "equipo.marca_equ";
                                                $rol = "rol.nombre_rol";
                                                $sql = $con->query("select CONCAT($marca,' ',$rol) AS Equipos, equipo.id_equipo FROM ((`equipo` INNER JOIN rol ON equipo.id_rol=rol.id_rol) INNER JOIN rack ON equipo.id_rack=rack.id_rack)");
                                                while ($rows = $sql->fetch_array()) {
                                                ?>
                                                    <option value="<?php echo $rows['id_equipo']; ?>"><?php echo $rows["Equipos"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Numero de puertos</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect" name="nompuerto" required>
                                                <?php
                                                $sql2 = $con->query("select `cant_puertos_equ` FROM `equipo` `equipo` INNER JOIN rol ON equipo.id_rol=rol.id_rol WHERE $marca='hp' AND $rol='switch'  AND `estado_equ`='1'");
                                                while ($fila = $sql2->fetch_array()) {
                                                    for ($i = 1; $i <= $fila['cant_puertos_equ']; $i++) {
                                                ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Nombre del puerto</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="nompuerto" value="" placeholder="Ej, gigabitEthernet, FastEthernet, Serial, etc...">
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
                                                    <input tabindex="7" type="radio" class="check" id="minimal-radio-3" value="false" name="estado">
                                                    <label for="minimal-radio-1">Inactivo</label>
                                                </ul>
                                            </div>
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
                <?php include_once 'rightbar.php'; ?>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </div>
    <?php include_once 'scripts.php'; ?>
    <script src="js/pages/mask.js"></script>
</body>

</html>