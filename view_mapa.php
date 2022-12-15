<!DOCTYPE html>
<html lang="en">

<head>
	<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Puntos Georeferenciados desde MySQL</title>
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
</head>

<body>
	<div id='map'></div>
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