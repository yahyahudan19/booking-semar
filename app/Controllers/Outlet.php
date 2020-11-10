<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Outlet extends BaseController
{
    public function index(){
        $data=[
            'title' => 'Outlet - Nelongso Group'
        ];
        return view('resto/Outlet',$data);
    }
    public function reservasi(){
        $data=[
            'title' => 'Reservasi - Nelongso Group'
        ];
        return view('resto/Reservasi',$data);
    }
}