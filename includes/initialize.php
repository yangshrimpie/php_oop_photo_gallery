<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// echo "<script>console.log(DS);</script>";

defined('SITE_ROOT') ? null : 
	define('SITE_ROOT', 
		DS.'Users'.DS.'andy'.DS.'Desktop'.DS.'www'.DS.'php_oop_photo_gallery');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// load config file first
require_once(LIB_PATH.DS.'config.php');

// load basic functions next so that everything after can use them
require_once(LIB_PATH.DS.'functions.php');

// load core objects
require_once(LIB_PATH.DS.'session.php');
require_once(LIB_PATH.DS.'database.php');
require_once(LIB_PATH.DS.'database_object.php');
require_once(LIB_PATH.DS.'pagination.php');
require_once(LIB_PATH.DS.'PHPMailer'.DS.'class.phpmailer.php');
require_once(LIB_PATH.DS.'PHPMailer'.DS.'class.smtp.php');
require_once(LIB_PATH.DS.'PHPMailer'.DS.'language'.DS.'phpmailer.lang-en.php');

// load database-related classes
require_once(LIB_PATH.DS.'user.php');
require_once(LIB_PATH.DS.'photograph.php');
require_once(LIB_PATH.DS.'comment.php');

?>