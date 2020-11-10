<?php

namespace App\Controlles\Home;

use App\Controllers\BaseController;

class Outlet extends BaseController
{
    public function index(){
        return view('resto/Reservasi');
    }
}