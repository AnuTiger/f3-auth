<?php

namespace App\Auth\Controllers;

use Controller;

class ResetPasswordController extends Controller {
	protected $viewPath = 'auth\passwords';

	public function get() {
		$this->template('\reset');
	}

	public function post() {}
}