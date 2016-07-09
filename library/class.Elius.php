<?php

/**
 * Class: Main Elius Framework
 * @return singleton-framework
 * @package elius-mvc-framework
 * @version  9.2.1
 * @see  http://localhost/elius-mvc/ <Elius MVC Homepage>
 */

class Elius {
	protected $_controllers = "index",
			$_methods = "index",
			$_params = [],
			$_url;

	public function __construct() {
		$this->_url = $this->getUrl();
		print_r($this->_url);
	}

	public function getUrl() {
		if(isset($_GET['q'])):
			$url = $_GET['q'];
			$url = rtrim($url,'/');
			$url = filter_var($url,FILTER_SANITIZE_URL);
			$url = explode("/",$url);

			return $url;
		endif;
	}
}