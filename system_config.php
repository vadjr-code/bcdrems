<?php
/* SESSION START
*/
session_start();

/* DATABASE CONFIGURATON:
Info: List of default value. Should be change depends on the hosting credentials.
Note: Currently, we only support mysqli database connection.
DB_HOST = localhost
DB_USER = root
DB_PASS = root
DB_NAME = database
*/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'bcd_rems');
define('DB_PREFIX', 'rems_');

/* SYSTEM INFORMATION:
Info: Required to change depending on your system information.
*/
define('SYS_TITLE', 'REMS');
define('SYS_DESCRIPTION', 'Real Estate Management System');
define('SYS_VERSION', '1.0.0');

/* DIRECTORY PATH LOCATION:
Info: Don't change if you don't know what you are doing.
*/
define('MGMT_DIR', dirname(__FILE__) . '/mgmt');
define('CORE_DIR', dirname(__FILE__) . '/core');
define('INC_DIR', dirname(__FILE__) . '/inc');
