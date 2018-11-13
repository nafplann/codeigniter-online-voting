<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{
	public function index()
	{
		// Data random
		$data = [
			'menu' => ['Coto', 'Konro', 'Pallubasa', 'Pisang Ijo']
		];

		// Memanggil file test.blade.php
		// Tidak perlu menuliskan .blade.php
		view('test', $data);
	}
}
