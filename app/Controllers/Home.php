<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('resto/Index');
	}

	public function reservasi()
	{
		// return view('welcome_message');
		return view('resto/Reservasi');
	}

	//--------------------------------------------------------------------

}
