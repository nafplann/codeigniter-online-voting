<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller 
{
	public function home()
	{
		view('pages.home');
	}
}
