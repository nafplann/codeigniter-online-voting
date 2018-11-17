<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function login()
	{
		view('auth/login');
	}

	public function register()
	{
		view('auth/register');
	}

	public function forgot()
	{
		view('auth/forgot');
	}
}