<?php

/**
 * Main Setup File
 * @package Elius <#elius-mvc>
 * @version  4.2
 * @author Peterson Umoke <umoke10@hotmail.com>
 * @see http://github.com/peterson-umoke/elius-mvc
 */

if(DEVELOPMENT_ENVIRONMENT == true) {
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
} else {
	error_reporting(E_ALL);
	ini_set('display_errors', 'Off');
	ini_set('log_errors', 'On');
	ini_set('error_log',BASE.'tmp'.DS.'logs'.DS.'error.log');
}