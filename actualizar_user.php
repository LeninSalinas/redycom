<?php
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Usuario";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php'; ?>
<style type="text/css">
    .image-container {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .image-container img {
        min-width: 100%;
        object-fit: cover;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        -ms-border-radius: 3px;
        -o-border-radius: 3px;
    }

    .button-container {
        width: 100%;
        text-align: center;
    }

    .button-container button {
        padding: 7px 18px;
        border: none;
        border-radius: 3px;
        background: #1976d2;
        color: #fff;
        transition: 0.3s all ease;
        -webkit-transition: 0.3s all ease;
        -moz-transition: 0.3s all ease;
        -ms-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
    }

    .button-container button:hover {
        background: #2780da;
    }

    .images-cards figure {
        position: relative;
    }

    .images-cards img {
        height: 240px;
    }

    .images-cards figure figcaption {
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
        font-size: 44px;
        cursor: pointer;
        opacity: 0;
        transition: 0.3s all ease;
        -webkit-transition: 0.3s all ease;
        -moz-transition: 0.3s all ease;
        -ms-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
    }

    .images-cards figure figcaption:hover {
        opacity: 1;
    }

    #Images .add-new-photo {
        display: flex;
        border: 4px dashed black;
        height: 100%;
        min-height: 240px;
        justify-content: center;
        align-items: center;
        font-size: 50px;
        color: black;
        border-radius: 4px;
        cursor: pointer;
        transition: 0.3s all ease;
        -webkit-transition: 0.3s all ease;
        -moz-transition: 0.3s all ease;
        -ms-transition: 0.3s all ease;
        -o-transition: 0.3s all ease;
    }

    #Images .add-new-photo.first:hover {
        background: rgba(255, 255, 255, 0.17);
    }

    #add-photo-container input {
        display: none;
    }
</style>
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
                                <h4 class="card-title">Creacion de un usuario</h4>                                
                                <?php
                                $code = $_GET['id'];
                                $sql2 = $con->query("SELECT * FROM `usuario` WHERE `id_usr`='$code'");
                                while ($fila = $sql2->fetch_array()) {
                                ?>
                                <form class="form" method="POST" action="php/update_user.php?id=<?php echo $code?>" enctype="multipart/form-data">
                                <label for="example-text-input" class="col-2 col-form-label"><b> Imagen del usuario</b></label>
                                    <section id="Images" class="images-cards">
                                        <div class="row">
                                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-12" id="add-photo-container">
                                                <div class="add-new-photo first" id="add-photo">
                                                    <span><i class="icon-camera"></i></span>
                                                </div>
                                                <input class="form-control" type="file" id="add-new-photo" name="foto">                                                                                             
                                            </div>
                                        </div>
                                    </section>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Nombre del usuario</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="user" value="<?php echo $fila['nombre_usr']; ?>" placeholder="Escriba su nombre">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Apellido</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="apellido" value="<?php echo $fila['apellido_usr']; ?>" placeholder="Escriba su apellido">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Correo</label>
                                        <div class="col-10">
                                            <input class="form-control" type="email" name="email" value="<?php echo $fila['email_usr']; ?>" placeholder="Escriba su correo">
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Password</label>
                                        <div class="col-10">
                                            <input class="form-control" type="password" name="password" >
                                        </div>
                                    </div>
                                    <div class="form-group m-t-40 row">
                                        <a href="#"><button class="btn btn-danger waves-effect waves-light m-r-10">Cancelar</button></a>
                                        <button type="reset" class="btn btn-warning waves-effect waves-light m-r-10">Vaciar</button>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Registrar</button>
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
    <script src="js/pages/mask.js"></script>
    <script>
        function createPreview(file) {
            var imgCodified = URL.createObjectURL(file);
            var img = $('<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-12"><div class="image-container"> <figure> <img src="' + imgCodified + '" alt="Foto del usuario"> <figcaption> <i class="ti-close"></i> </figcaption> </figure> </div></div>');
            $(img).insertBefore("#add-photo-container");
        }
        $(document).ready(function() {
            $(document).on("click", "#add-photo", function() {
                $("#add-new-photo").click();
            });

            // -> Abrir el inspector de archivos

            // Cachamos el evento change

            $(document).on("change", "#add-new-photo", function() {

                console.log(this.files);
                var files = this.files;
                var element;
                var supportedImages = ["image/jpeg", "image/png", "image/gif"];
                var seEncontraronElementoNoValidos = false;

                for (var i = 0; i < files.length; i++) {
                    element = files[i];

                    if (supportedImages.indexOf(element.type) != -1) {
                        createPreview(element);
                    } else {
                        seEncontraronElementoNoValidos = true;
                    }
                }

                if (seEncontraronElementoNoValidos) {
                    showMessage("Se encontraron archivos no validos.");
                } else {
                    showMessage("Todos los archivos se subieron correctamente.");
                }

            });

            // -> Cachamos el evento change

            // Eliminar previsualizaciones

            $(document).on("click", "#Images .image-container", function(e) {
                $(this).parent().remove();
            });

            // -> Eliminar previsualizaciones

        });
    </script>
</body>

</html>