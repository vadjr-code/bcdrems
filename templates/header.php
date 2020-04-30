<?php
define('ROOT_PATH', dirname(dirname(__FILE__)));
require_once ROOT_PATH . '/core/files.php';
require_once ROOT_PATH . '/system_config.php';
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
	<script src="/inc/assets/jquery/jquery.min.js"></script>
</head>

<body>
	<header id="site-header" class="bg-transparent">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#">
					<?php if (defined('SYS_TITLE')) {
						echo SYS_TITLE;
					} ?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown link
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>