<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model {

    // protected $table = 'InfoResto';
    // protected $primaryKey = 'idCabang';
    // protected $allowedFields = ['username','password'];

    // protected $validationMessages = [
    //     'username'        => [
    //         'required' => 'Bagian Username Harus diisi'
    //     ],
    //     'password'        => [
    //         'required' => 'Bagian Password Harus diisi'
    //     ]
    // ];
    // protected $skipValidation  = false;

    // public function getUser()
    // {
    //     return $this->findAll();
    // }

    protected $table = 'users';
    protected $allowedFields = ['user_name','user_password'];
}


/* End of file ModelName.php */

?>