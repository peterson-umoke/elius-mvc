<?php

/**
 * Main Configurations File
 * requires the main file that does our imports
 * @package Elius <#elius-mvc>
 * @version  4.2
 * @author Peterson Umoke <umoke10@hotmail.com>
 * @see http://github.com/peterson-umoke/elius-mvc
 */

// state the default values needed to be overided by the config file in the public dir
if(file_exists(BASE.'public'.DS.'config.php')):
	////////////////////////////////////////////////////////////////////////////
	// require the public folder config file to override the main setup files //
	////////////////////////////////////////////////////////////////////////////
	require_once BASE.'public'.DS.'config.php';

	// end scripts
endif;

// define the basic app environment
if(!defined("DEVELOPMENT_ENVIRONMENT")):
	define("DEVELOPMENT_ENVIRONMENT",true);
endif;

// basic site setup
if(!defined('SITE_URL')):
	define("SITE_URL",'http://localhost/elius-mvc/');
endif;

if(!defined('DB_TYPE')):
	define("DB_TYPE",'mysql');
endif;

if(!defined("DB_NAME")):
	define("DB_NAME",'webtricks');
endif;

if(!defined("DB_USERNAME")):
	define("DB_USERNAME",'root');
endif;

if(!defined("DB_PWD")):
	define("DB_PWD",'');
endif;

if(!defined("DB_HOST")):
	define("DB_HOST",'localhost');
endif;

if(!defined("DB_CHARSET")):
	define("DB_CHARSET",'utf-8');
endif;

// define constants
define("APP_DIR",BASE.'application');
define("VIEWS_DIR",APP_DIR.DS.'views');
define("CONTROLLERS_DIR",APP_DIR.DS.'controllers');
define("MODELS_DIR",APP_DIR.DS.'models');
define("PUBLIC_DIR",BASE.'public');
define("BASE_URL",$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/elius-mvc/');
// define("BASE_URL",$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
define("LIBRARY_DIR",BASE.DS.'library');

/* dat's all folks */