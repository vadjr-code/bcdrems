<?php

function load_site()
{
	require_once dir(__FILE__) . 'web_config.php';
	require_once 'header.php';
	require_once 'body.php';
	require_once 'footer.php';
}
