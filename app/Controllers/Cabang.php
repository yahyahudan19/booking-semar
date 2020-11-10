<?php

namespace App\Controllers;

class Cabang extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Cabangku - Nelongso Group'

        ];
        return view('resto/Outlet', $data);
    }
}
