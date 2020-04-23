<?php
define('ROOT_DIR', dirname(dirname(__FILE__)));
require_once ROOT_DIR . "/web_config.php";

spl_autoload_register(function ($class) {
	require_once ROOT_DIR . '/core/admin/' . $class . '.php';
});

function site_title()
{
}
