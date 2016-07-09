<?php

/**
 * Bootstrap File
 * @package elius-mvc-framework
 * @version  9.2.1
 * @see  http://localhost/elius-mvc/ <Elius MVC Homepage>
 * @return config file, setup file, autoload file
 */

// check if the file exist and require in the config file
if(file_exists(BASE.DS."application".DS."shared".DS."config.php")):
	require_once BASE.'application'.DS.'shared'.DS.'config.php';
endif;

//  check if the setup file exist and require it
if(file_exists(BASE.DS."application".DS."shared".DS."setup.php")):
require_once BASE.'application'.DS.'shared'.DS.'setup.php';
endif;

// check if the autoload file exist and autoload it
if(file_exists(BASE.DS."application".DS."shared".DS."autoload.php")):
	require_once BASE.'application'.DS.'shared'.DS.'autoload.php';
endif;

/** That's all Folks */