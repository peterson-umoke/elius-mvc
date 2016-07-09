<?php

/**
 * Main Helpers Class
 * @package Elius <#elius-mvc>
 * @version  4.2
 * @author Peterson Umoke <umoke10@hotmail.com>
 * @see http://github.com/peterson-umoke/elius-mvc
 */

class Helpers {
	// debug statement
	public static function debug($value) {
		echo "<tt><pre>";
		print_r($value);
		echo "</tt></pre>";
	}

	public static function dump($value) {
		echo "<tt><pre>";
		print_r($value);
		echo "</tt></pre>";
	}

	// simple information function
	public static function info($message,$class) {
		return "<div class=\"$class\">$message</div>";
	}

	// simple redirection function
	public function redirect($location) {
		header("Location:$location");
	}

	// spit the info method to the page
	public static function spitinfo($msg,$clz) {
		echo self::info($msg,$clz);
	}
}