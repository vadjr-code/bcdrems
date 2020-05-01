<?php
define('ROOT_PATH', dirname(dirname(dirname(__FILE__))));
require_once ROOT_PATH . '/system_config.php';
require_once ROOT_PATH . '/core/files.php';
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
	<script src="/inc/assets/jquery/jquery.min.js"></script>
	<script src="/inc/assets/tinymce/tinymce.min.js"></script>
</head>

<body>
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
					<li class="nav-item active">
						<a class="nav-link" href="/mgmt" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home fa-fw"></i> Dashboard</a>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-map-marker-alt fa-fw"></i> Properties</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="/mgmt/all_properties.php" class="nav-link">All Properties</a>
							</li>
							<li class="nav-item">
								<a href="/mgmt/add_property.php" class="nav-link">Add Property</a>
							</li>
							<li class="nav-item">
								<a href="/mgmt/property_type.php" class="nav-link">Property Type</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-children">
						<a class="nav-link" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-map fa-fw"></i> Location</a>
						<ul class="sub-menu">
							<li class="nav-item">
								<a href="#" class="nav-link">City</a>
							</li>
							<li class="nav-item">
								<a href="/mgmt/map.php" class="nav-link">Map</a>
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
					<li class="nav-item active">
						<a class="nav-link" href="?logout" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-sign-out-alt fa-fw"></i> Exit</a>
					</li>
				</ul>
			</nav>
			<div class="account d-flex align-items-center text-white">
				<i class="fa fa-user fa-fw"></i>: Administrator
			</div>
		</aside>
		<article id="content">