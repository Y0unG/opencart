<?php
// Version
define('VERSION', '3.0.2.0');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
//require_once(DIR_SYSTEM . 'startup.php');

//start('catalog');

echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi deserunt, doloremque impedit incidunt nulla repudiandae vel. Dicta, earum eligendi eos et in perspiciatis porro quos saepe sed temporibus, ullam voluptatum?</p> ";