<?php
/* Automatically Loading the classes declared outside the file.
/ Note: Do not remove. Else heaven will fall on your head.
/ When you create class put it inside classes folder make sure that it starts with "class_"
/ then the class name of your file.
 */
spl_autoload_register(function ($class) {
	$file = ROOT_PATH . "/core/classes/class_" . strtolower($class) . ".php";
	if (file_exists($file)) {
		require_once $file;
	}
});


/* CUSTOM FUNCTIONS
/ Note: You can add your functions here.
*/
function site_upload_uri($file = NULL)
{
	if ($file == NULL) {
		echo $_SERVER['HTTP_PROTOCOL'] . "://" . $_SERVER['HTTP_HOST'] . "/inc/uploads/";
	} else {
		echo $_SERVER['HTTP_PROTOCOL'] . "://" . $_SERVER['HTTP_HOST'] . "/inc/uploads/" . $file;
	}
}
