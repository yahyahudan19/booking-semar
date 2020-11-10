<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Admin extends Model
{
    protected $table = "InfoResto";
 
    public function getInfo($id = false)
    {
        if($id === false){
            return $this->table('InfoResto')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('InfoResto')
                        ->where('id_Cabang', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 
}