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
                                <h4 class="card-title">Registro de sucursales</h4>
                                <?php
                                $code = $_GET['id'];
                                $sql2 = $con->query("select * from sucursal where `id_sucursal`='$code'");
                                while ($fila = $sql2->fetch_array()) {
                                ?>
                                    <form class="form-material m-t-40" method="POST" action="php/actualizar_sucursal2.php?id=<?php echo $code ?>">

                                        <div class="form-group">
                                            <label for="example-email">Nombre     <span  class="help"></span></label>
                                            <input type="text" id="nombre" name="nombre"value="<?php echo $fila['nombre_suc']; ?>" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email">Ubicacion <span class="help"></span></label>
                                            <input type="text" id="ubicacion" name="ubicacion" value="<?php echo $fila['ubicacion_suc']; ?>"class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email">Telefono <span class="help"></span></label>
                                            <input type="text" id="telefono" name="telefono" value="<?php echo $fila['telefono_suc']; ?>" class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select class="form-control" name="status">
                                                <option <?php if ($fila['estado_suc'] == "1") {echo "selected";} ?>value="1">Habilitado</option>
                                                <option <?php if ($fila['estado_suc'] == "0") {echo "selected";} ?> value="0">Desabilitado</option>
                                            </select>
                                        </div>
                                        <tr>
                                            <td>
                                                <input type="submit" class="btn btn-success" value="Enviar" onclick="return ValidarForm()">

                                            </td>
                                            <td align="center">
                                                <input type="reset" class="btn btn-danger" value="Cancelar">
                                            </td>

                                        </tr>
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