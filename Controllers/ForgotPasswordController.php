<?php

namespace App\Auth\Controllers;

use Controller;

class ForgotPasswordController extends Controller {
	protected $viewPath = 'auth\passwords';

	public function get() {
		$this->template('\email');
	}

	public function post() {}
}