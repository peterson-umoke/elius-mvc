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
			$_parameters = [],
			$_url;

	public function __construct() {
		$this->_url = $this->getUrl();
		$this->frontController();
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

	public function getcontroller() {
		if(file_exists(CONTROLLERS_DIR.DS.'controller.'.strtolower($this->_url[0]).'.php')) {
			$this->_controllers = $this->_url[0];
			array_shift($this->_url);
		}
		require_once CONTROLLERS_DIR.DS.'controller.'.strtolower($this->_controllers).'.php';
		$this->_controllers = new $this->_controllers();
	}

	public function getmethods() {
		if(isset($this->_url[0])) {
			$this->_methods = $this->_url[0];
			array_shift($this->_url);
		}
	}

	public function getparams() {
		if(method_exists($this->_controllers, $this->_methods)) {
			$this->_parameters = $this->_url ? array_values($this->_url) : [];
			call_user_func_array([$this->_controllers,$this->_methods], $this->_parameters);
		}
	}

	public function frontController() {
		$this->getcontroller();
		$this->getmethods();
		$this->getparams();
	}
}