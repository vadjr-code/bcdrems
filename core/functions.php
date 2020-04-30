<?php
/* Automatically Loading the classes declared outside the file.
/ Note: Do not remove. Else heaven will fall on your head.
 */
spl_autoload_register(function ($class) {
	// To be continued
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
