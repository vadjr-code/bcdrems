<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php
		$page_title = (!isset($page_title)) ? '' : $page_title;
		$title = $page_title . " | " . SITE_TITLE;
		echo $title;
		?>
	</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>