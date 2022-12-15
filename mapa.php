<?php
require_once 'config/db.php';
require_once 'config/conexion.php';
require_once 'php/accesos.php';
require_once 'php/funciones.php';

$titulo = "Mapa";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'head.php'; ?>
<link rel="stylesheet" href="leaflet.css" />
<script src="leaflet.js"></script>
<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    .leaflet-container {
        height: 600px;
        width: 800px;
        max-width: 100%;
        max-height: 100%;
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
                        <h4 class="text-white"><?php echo $titulo; ?></h4>
                    </div>
                    <div class="col-md-6 text-right">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id='map'></div>
                            </div>
                        </div>
                    </div>
                    <?php include_once 'rightbar.php'; ?>
                </div>
            </div>
            <?php include_once 'footer.php'; ?>
        </div>
        <?php include_once 'scripts.php'; ?>
        <script>
            var map = L.map('map').setView([15.770554492123601, -86.79360974833479], 14);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.uth.hn">UTH</a> UTH Developers'
            }).addTo(map);
            var LeafIcon = L.Icon.extend({
                options: {
                    iconSize: [38, 35],
                    iconAnchor: [20, 8],
                    popupAnchor: [-3, -16]
                }
            });

            const blueIcon = new LeafIcon({
                iconUrl: 'images/bluepin.png'
            });
            const redIcon = new LeafIcon({
                iconUrl: 'images/redpin.png'
            });
            const greenIcon = new LeafIcon({
                iconUrl: 'images/greenpin.png'
            });

            <?php
            $sql = "SELECT * FROM `sucursal`";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                L.marker([<?php echo $row['ubicacion_suc']; ?>], {
                    icon: redIcon
                }).addTo(map).bindPopup('<a href="../racks.php?id=<?php echo $row['id_sucursal'] ?>"><?php echo $row['nombre_suc'] ?></a>');

            <?php
            }
            ?>
        </script>
</body>

</html>