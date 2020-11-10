<?php 

namespace App\Controllers;

use App\Models\User;

class Login extends BaseController 
{

    protected $userModel;
    public function __construct()
    {
       $this->userModel = new User(); 
    }
    public function index(){
        $data = [
            'title' => 'Login - Nelongso Group'
        ];
        return view('login/index',$data);
    }


    // public function Login(string $username, string $password)
    public function Login()
    {
        return view('resto/Admin');
        // $user = $this->userModel->findAll();
        // if ($user['username'] == $username && $user['password'] == $password) {
        //     return view('resto/Admin', $user);
        // }
        // else {
        //     echo 'username & password salah';
        // }
        
    }

    public function Register()
    {
        
       # return view form register
    }

    public function InsertUser()
    {
        $this->userModel->save([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')
        ]);
        #return redirect ke page login
    }
}
