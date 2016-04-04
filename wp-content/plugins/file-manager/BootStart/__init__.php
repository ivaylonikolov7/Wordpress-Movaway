<?php

/**
 *
 * Initialize and loads the entire framework
 *
 * @package plugin-name
 *
 * */

$modules = array(

	'BootStart',
	'OptionsManager',
	'CSV',
	'HL7',
	'FTP',
	'REST',
	'Debug',
	'CacheEngine'

);

// Loading all the files
foreach ( $modules as $module ) require_once( $module . '.php' );
