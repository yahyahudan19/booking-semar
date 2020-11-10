<?php

namespace App\Controllers;

class Cabang extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Cabang - Nelongso Group'
            
        ];
        return view('resto/Outlet', $data);
    }

}
