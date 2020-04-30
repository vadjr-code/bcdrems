<?php
/* DATABASE CONFIGURATON:
Info: List of default value. Should be change depends on the hosting credentials.
DB_HOST = localhost
DB_USER = root
DB_PASS = root
DB_NAME = database
*/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bcd_rems');

/* SYSTEM INFORMATION:
Info: Required to change depending on your system information.
*/
define('SYS_TITLE', 'REMS');
define('SYS_DESCRIPTION', 'Real Estate Management System');
define('SYS_VERSION', '1.0.0');

/* DIRECTORY PATH LOCATION:
Info: Don't change if you don't know what you are doing.
*/
define('ADMIN_DIR', dirname(__FILE__) . '/admin');
define('CORE_DIR', dirname(__FILE__) . '/core');
define('INC_DIR', dirname(__FILE__) . '/inc');
