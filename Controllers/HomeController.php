<?php

namespace App\Auth\Controllers;

use App;
use Controller;

class HomeController extends Controller {
	public function beforeroute() {
		if(!App::instance()->user()) {
			reroute('@getLogin');
		}
	}

	public function get() {
		$this->template('home');
	}
}