<?php

/**
 * Class: Main Elius Framework
 * @return singleton-framework
 * @package elius-mvc-framework
 * @version  9.2.1
 * @see  http://localhost/elius-mvc/ <Elius MVC Homepage>
 */

class Elius {

	protected $_controller = "index";
	protected $_method = "index";
	protected $_params = [];
	protected $_urlGet;

	public function __construct() {
		$this->_urlGet = $this->urlParser();
		$this->eliusControllers($this->_urlGet);
	}

	private function urlParser() {

		if(isset($_GET['q'])) {
			$url = $_GET['q'];
			$url = rtrim($url,'/');
			$url = filter_var($url,FILTER_SANITIZE_URL);
			$url = explode('/', $url);

			return $url;
		}
	}

	private function eliusControllers($urlFirn) {
		if(file_exists(CONTROLLERS_DIR.DS.'controller.'.ucwords($urlFirn[0]).'.php')) {
			$this->_controller = ucwords($urlFirn[0]);
			array_shift($urlFirn);
		}
		require_once CONTROLLERS_DIR.DS.'controller.'.$this->_controller.'.php';
		$this->_controller = new $this->_controller();
	}

	private function eliusMethods() {

	}

	private function eliusParams() {

	}
}