<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = "User";
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'id_user_type',
        'user_username',
        'user_name',
        'user_lastname',
        'user_email',
        'user_phone',
        'user_rut',
        'user_pass',
        'user_created_at'
    ];

    public function index(){

    }
    public function admins(){
        $this->builder()->where('id_user_type',1);
        return $this;
    }
}