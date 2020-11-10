<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // public function __construct() 
    // {
    //     $this->InfoResto = new Admin();
        
    // }
	public function index() 
	{
		$data = [
            'title' => 'Admin - Nelongso Group'
        ];
        // $data['InfoResto'] = $this->InfoResto->getInfo();
		// return view('welcome_message');
		return view('resto/Admin', $data);
	}

	public function pengunjung()
	{
		$data = [
			'title' => 'Pengunjung - Nelongso Group'
		];
		// return view('welcome_message');
		return view('resto/Pengunjung', $data);
	}



	//--------------------------------------------------------------------

}
