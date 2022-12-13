<?php
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Nueva Sucursal";
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


                <table align="center" border="0">
                    <form name="Form1" id="Form1" onsubmit=" return ValidarForm()" method="post" action="sucursal_save.php" enctype="multipart/form-data">
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
                                        <h4 class="card-title">Registro de Sucursal</h4>
                                        <h6 class="card-subtitle"> <code></code></h6>
                                        <form class="form-material m-t-40" method="POST" action="php/new_sucursal.php">

                                            <div class="form-group">
                                                <label for="example-email">Nombre <span class="help"></span></label>
                                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email">Ubicacion <span class="help"></span></label>
                                                <input type="text" id="ubicacion" name="ubicacion" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email">Telefono <span class="help"></span></label>
                                                <input type="text" id="telefono" name="telefono" class="form-control" placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label>Estado</label>
                                                <select class="form-control" name="status">
                                                    <option value="1">Habilitado</option>
                                                    <option value="0">Desabilitado</option>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include_once 'rightbar.php'; ?>
                        </form>
                        </table>
            </div>
        </div>
        <?php include_once 'footer.php'; ?>
    </div>
    <?php include_once 'scripts.php'; ?>
</body>

</html>