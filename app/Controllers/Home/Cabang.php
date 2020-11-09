<?php

namespace App\Controlles\Cabang;

use App\Controllers\BaseController;

class Cabang extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Cabang - Nelongso Group'
        ];
        return view('resto/Index', $data);
    }

    public function reservasi()
    {
        // return view('welcome_message');
        return view('resto/Reservasi');
    }

    //--------------------------------------------------------------------

}
