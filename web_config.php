<?php
/* DATABASE CONFIGURATION
INFO: This is where you setup the your database credentials */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'rems');

/* SITE SETTINGS
INFO: You can change this depending on your needs but stay
this as default if you don't know what you are doing */
define('SITE_TITLE', 'REMS');
define('SITE_DOMAIN', 'http://rems.dcom/rems');
define('SITE_ADMIN_DIR', SITE_DOMAIN . '/admin');
define('SITE_CORE_DIR', SITE_DOMAIN . '/core');
define('SITE_FRONT_END_DIR', SITE_DOMAIN . '/front-end');

echo dirname(__FILE__);
