<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home - Nelongso Group'
		];
		return view('resto/Index',$data);
	}

	public function reservasi()
	{
		// return view('welcome_message');
		return view('resto/Reservasi');
	}

	
	//--------------------------------------------------------------------

}
