<?php
define('PAGE_TITLE', 'Dashboard');
require_once 'templates/header.php';
?>
<div id='map'></div>
<header></header>
<main></main>
<footer></footer>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoic2FnZWNvZGV4IiwiYSI6ImNrNnZ6eTd3ZzAyZXEzc29iNGk0YjV0M2kifQ.XaVxVmYumM6vw4zmVA08tw';
	var map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/streets-v11',
		center: [122.9583955, 10.687105],
		zoom: 14
	});
	map.on('load', function() {
		map.addSource('points', {
			'type': 'geojson',
			'data': {
				'type': 'FeatureCollection',
				'features': [{
					// feature for Mapbox DC
					'type': 'Feature',
					'geometry': {
						'type': 'Point',
						'coordinates': [
							122.9583955,
							10.687105
						]
					},
					'properties': {
						'title': 'Mapbox DC',
						'icon': 'Home'
					}
				}]
			}
		});
		map.addLayer({
			'id': 'points',
			'type': 'symbol',
			'source': 'points',
			'layout': {
				// get the icon name from the source's "icon" property
				// concatenate the name to get an icon from the style's sprite sheet
				'icon-image': ['concat', ['get', 'icon'], '-15'],
				// get the title name from the source's "title" property
				'text-field': ['get', 'title'],
				'text-font': ['Open Sans Semibold', 'Arial Unicode MS Bold'],
				'text-offset': [0, 0.6],
				'text-anchor': 'top'
			}
		});
	});
</script>
<?php
require_once 'templates/footer.php';
?>