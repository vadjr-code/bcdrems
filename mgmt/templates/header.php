<?php
define('ROOT_PATH', dirname(dirname(dirname(__FILE__))));
require_once ROOT_PATH . '/system_config.php';
require_once ROOT_PATH . '/core/files.php';
$database = new Database();
Session::check();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php if (defined('PAGE_TITLE')) {
			echo PAGE_TITLE . " | ";
		}
		if (defined('SYS_TITLE')) {
			echo SYS_TITLE;
		}
		?>
	</title>
	<link rel="stylesheet" href="/inc/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/inc/assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="/inc/assets/mgmt/css/style.css">
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
	<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />
	<script>
		mapboxgl.accessToken = 'pk.eyJ1Ijoic2FnZWNvZGV4IiwiYSI6ImNrOXAxcm45YTA2OXMzb24xbGVzbjFvcnMifQ.79VzBKe-icUjCEE_ifFUAw';

		var icons = {
			0: 'fa fa-asterisk',
			1: 'fa fa-key',
			2: 'fa fa-bath',
			3: 'fa fa-home',
			4: 'fa fa-map',
			5: 'fa fa-map-marker',
			6: 'fa fa-shopping-cart',
			7: 'fa fa-lock',
			8: 'fa fa-road',
			9: 'fa fa-umbrella',
			10: 'fa fa-trash',
			11: 'fa fa-user-md',
			12: 'fa fa-bell',
			13: 'fa fa-star',
			14: 'fa fa-briefcase',
			15: 'fa fa-globe',
			16: 'fa fa-certificate',
			17: 'fa fa-heart',
			18: 'fa fa-fire',
			19: 'fa fa-user'
		};

		var map = '';
		var geocoder = '';
		var marker = '';

		var mgmt_uri = window.location.protocol + "//" + window.location.host + "/mgmt";
	</script>
</head>

<body>
	<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
	<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css" />
	<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
	<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
	<div class="wrapper d-flex h-100">
		<aside id="sidebar" class="h-100">
			<div class="system-brand">
				<a href="/">
					<i class="fa fa-map-marker-alt fa-fw"></i>
					<?php if (defined('SYS_TITLE')) {
						echo SYS_TITLE;
					} ?>
				</a>
			</div>
			<nav>
				<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<li class="nav-item">
						<a class="nav-link" href="<?php mgmt_uri(); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw"></i> Dashboard</a>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-map-marker-alt fa-fw"></i> Properties</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="<?php mgmt_uri('all_properties.php'); ?>" class="nav-link">All Properties</a>
							</li>
							<li class="nav-item">
								<a href="<?php mgmt_uri('add_property.php'); ?>" class="nav-link">Add Property</a>
							</li>
							<li class="nav-item">
								<a href="<?php mgmt_uri('property_type.php'); ?>" class="nav-link">Property Type</a>
							</li>
							<!-- <li class="nav-item">
								<a href="<?php mgmt_uri('features.php'); ?>" class="nav-link">Features</a>
							</li> -->
						</ul>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-map fa-fw"></i> Location</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link">Barangay</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">City</a>
							</li>
							<li class="nav-item">
								<a href="<?php mgmt_uri('map.php'); ?>" class="nav-link">Map</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-users fa-fw"></i> Agents</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link">All Agents</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Add Agent</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-users fa-fw"></i> Users</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link">All User</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Add User</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-flag fa-fw"></i> Reports</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link">All Reports</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Generate Report</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-cogs fa-fw"></i> Settings</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="<?php mgmt_uri('map_settings.php'); ?>" class="nav-link">Maps</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php mgmt_uri('?logout'); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-sign-out-alt fa-fw"></i> Exit</a>
					</li>
				</ul>
			</nav>
			<div class="account d-flex align-items-center text-white">
				<i class="fa fa-user fa-fw"></i>: Administrator
			</div>
		</aside>
		<article id="content">