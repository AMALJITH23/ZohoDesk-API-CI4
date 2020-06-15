<?php namespace App\Models;

class Login_model extends  \CodeIgniter\Model
{        
    protected $table      = 'user_master';
    protected $primaryKey = 'id';

    public function login($username = '') {

        // echo $username; exit;

        $sql = "SELECT   *  FROM  users       
        WHERE email  = '$username'  ";
        $q = $this->db->query($sql);
        return $q->row_array();


        // test
        // $users = $Login_model->where('email', $username)
        // ->findAll();
        // return $users;
    }

}
