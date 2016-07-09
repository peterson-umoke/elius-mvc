<?php

/**
 * Autoload File
 * @package Elius <#elius-mvc>
 * @version  4.2
 * @author Peterson Umoke <umoke10@hotmail.com>
 * @see http://github.com/peterson-umoke/elius-mvc
 */

spl_autoload_register('auto_call_class');

function auto_call_class($classname) {

	// require file from the library if it exists
	if(file_exists(LIBRARY_DIR.DS.'class.'.$classname.'.php'))
	{
		require_once LIBRARY_DIR.DS.'class.'.$classname.'.php';
	}

	// require files from the vendor direcotry
	elseif (file_exists(LIBRARY_DIR.DS.'vendors'.DS.$classname.'.php'))
	{
		require_once LIBRARY_DIR.DS.'vendors'.DS.$classname.'.php';
	}

	// require the right model directory
	elseif (file_exists(MODELS_DIR.DS.'model.'.$classname.'.php'))
	{
		require_once MODELS_DIR.DS.'model.'.$classname.'.php';
	}

	// require the right exception
	else 
	{
		throw new Exception("$classname.php does not exist in any directory", 1);	
	}
}