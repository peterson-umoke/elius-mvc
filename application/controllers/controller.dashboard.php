<?php

class Dashboard extends  Controller {
	public function index() {
		echo "you have landed on the default page setup for the pages";
	}
	
	public function user() {
		echo "this is the user page";
	}

	public function settings() {
		echo "this is the settings page";
	}
}