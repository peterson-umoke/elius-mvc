<?php

/**
 * Elius MVC Framework
 * @package elius-mvc-framework
 * @version  9.2.1
 * @see  http://localhost/elius-mvc/ <Elius MVC Homepage>
 * @return Singleton Framework
 */

// define the main constants
define("ROOT",dirname(dirname(__FILE__)));
define("DS",DIRECTORY_SEPARATOR);
define("BASE",ROOT.DS);

// require the base bootstrap file
if(file_exists(BASE.DS."application".DS."shared".DS."bootstrap.php")):
	require_once BASE.DS."application".DS."shared".DS."bootstrap.php";
endif;

$init = new Elius;