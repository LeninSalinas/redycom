
<!DOCTYPE html>
<html lang="en">
<head>
	<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Puntos Georeferenciados desde MySQL</title>
    <link rel="stylesheet" href="leaflet.css" />
    <script src="leaflet.js" ></script>

	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 500px;
			width: 700px;
			max-width: 100%;
			max-height: 100%;
		}
	</style>
</head>
<body>
<?php
	require_once '../config/db.php';
	require_once '../config/conexion.php';
	require_once 'accesos.php';
	require_once 'funciones.php';

	if ($con->connect_error) 
		  die("Connection failed: " . $con->connect_error);
	else {
  $sql3="Select * from sucursal";
	
	 
?>
<div id='map'></div>
<script>
    var map = L.map('map').setView([15.505955, -88.027547],14);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.uth.hn">UTH</a> UTH Developers'
	}).addTo(map);

	var LeafIcon = L.Icon.extend({
              options: {
              iconSize:     [38, 35],
              iconAnchor:   [20, 8],
              popupAnchor:  [-3, -16]
             }
              });

	const blueIcon = new LeafIcon({iconUrl: 'images/bluepin.png'});
	const redIcon = new LeafIcon({iconUrl: 'images/redpin.png'});
	const greenIcon = new LeafIcon({iconUrl: 'images/greenpin.png'});
    <?php 
            $result3 = $conn->query($sql3);
		   
            while($row3 = $result3->fetch_assoc()) { ?>
          //L.marker([<?php echo $row3['georef'];?>],{icon: redIcon}).addTo(map).bindPopup('<?php echo $row3['descripcion'];?>');
		  //L.marker([<?php echo $row3['georef'];?>],{icon: blueIcon}).addTo(map).bindPopup('<?php echo $row3['descripcion'];?>');
		  L.marker([<?php echo $row3['georef'];?>],{icon: greenIcon}).addTo(map).bindPopup('<?php echo $row3['descripcion'];?>');
            <?php } 
			}
		?>
</script>
</body>
</html>
