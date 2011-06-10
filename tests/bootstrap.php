<?php

$paths = array();

if (isset($GLOBALS['library-path'])) {
	$paths[] = $GLOBALS['library-path'];
}

if (isset($GLOBALS['loader-path'])) {
	$paths[] = $GLOBALS['loader-path'];
}

if (!empty($paths)) {
	set_include_path(implode(PATH_SEPARATOR, $paths) . PATH_SEPARATOR . get_include_path());
}

require_once 'Zend/Loader/Autoloader.php';
$loader = Zend_Loader_Autoloader::getInstance();
$loader->registerNamespace('Plesk_');
