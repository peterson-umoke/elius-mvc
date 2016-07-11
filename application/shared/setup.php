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

function home_url() {
	echo SITE_URL;
}

function get_home_url() {
	return SITE_URL;
}

function theme_dir() {
	echo PUBLIC_DIR;
}

function get_theme_dir() {
	return PUBLIC_DIR;
}

function site_url() {
	echo BASE_URL;
}

function get_site_url() {
	return BASE_URL;
}