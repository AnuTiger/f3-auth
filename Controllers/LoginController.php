<?php

namespace App\Auth\Controllers;

use Controller;

class LoginController extends Controller {
	protected $viewPath = 'auth';

	public function get() {
		$this->template('\login');
	}

	public function post() {}
}