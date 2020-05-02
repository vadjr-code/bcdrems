var map = '';
$('.location_search').each(function () {
	map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/streets-v11',
		center: [122.9583955, 10.687105],
		zoom: 12
	});
});

var geocoder = new MapboxGeocoder({
	accessToken: mapboxgl.accessToken,
	countries: 'ph',
	mapboxgl: mapboxgl,
	marker: false
}).addTo(map);

// map.addControl(new mapboxgl.NavigationControl());
var marker = new mapboxgl.Marker()
	.setLngLat([122.9583955, 10.687105])
	.addTo(map);

$('#map .marker').on('click', onDragEnd);

map.on('drag', onDragEnd);
map.on('mouseleave', onDragEnd);
map.on('mouseenter', onDragEnd);
map.on('zoomstart', onDragEnd);

function onDragEnd() {
	var center = map.getCenter();
	var zoom = map.getZoom();
	marker.setLngLat([center.lng, center.lat]);
	$('.property_lat').val(center.lat);
	$('.property_lng').val(center.lng);
	$('.property_zoom').val(zoom);
}