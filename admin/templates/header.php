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
	<script src="/inc/assets/jquery/jquery.min.js"></script>
</head>

<body>