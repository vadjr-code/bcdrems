<?php
class Site
{
	public function title()
	{
		return SITE_TITLE;
	}

	public function header()
	{
		$html = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title> | ' . Site::title() . '</title>
		</head>
		<body>';
		echo $html;
	}
}
