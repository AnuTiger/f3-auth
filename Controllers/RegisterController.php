<?php

namespace App\Auth\Controllers;

use Controller;

class RegisterController extends Controller {
	protected $viewPath = 'auth';

	public function get() {
		$this->template('\register');
	}

	public function post() {}
}