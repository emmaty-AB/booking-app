<?php
//Define the core paths
//Define them as absolute paths to make sure that require_once
//works as expected

//DIRECTORY_SEPARATOR is a PHP pre-defined constant
//(\ for Windows, / for Unix)

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'frontendBooking');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// Load config file first
require_once(LIB_PATH.DS."config.php");

// Load basic functions next so that everything after can use them
require_once(LIB_PATH.DS."functions.php");

// Load core objects

require_once(LIB_PATH.DS."database.php");



// Load database-related classes
require_once(LIB_PATH.DS."booking.php");



?>