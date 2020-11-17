<?php

namespace App\Controllers;

//defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends BaseController
{

    protected $bookingModel;
    
    // public function __construct()
    // {
    //     $this->bookingModel = new Booking();
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

         //$bookingModel = new \App\Models\Booking();
         //$data  = $this->bookingModel->findAll();

        // return view('welcome_message');

		return view('resto/Pengunjung', $data);
	}



	//--------------------------------------------------------------------

}
