<?php

namespace App\Controllers\Home;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home - Nelongso Group'
		];
		return view('resto/Index', $data);
	}

	public function reservasi()
	{
		// return view('welcome_message');
		$data = [
			'title' => 'Reservation - Nelongso Group'
		];
		return view('resto/Reservasi', $data);
	}

	public function login()
	{
		// return view('welcome_message');
		$data = [
			'title' => 'Login - Nelongso Group'
		];
		return view('login/index', $data);
	}

	public function outlet()
	{
		$data = [
			'title' => 'Outlet - Nelongso Group'
		];
		// return view('welcome_message');
		return view('resto/Outlet',$data);
	}
	public function admin()
	{
		$data = [
			'title' => 'Admin - Nelongso Group'
		];
		// return view('welcome_message');
		return view('resto/Admin', $data);
	}

	//--------------------------------------------------------------------

}
