<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'username', 'password', 'salt', 'avatar', 'role', 'active', 'created_by', 'created_date', 'update_by', 'update_date'
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestamps = false;
}
