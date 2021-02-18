<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailModel extends Model
{

    protected $table = 'email';
    protected $primaryKey = 'idEmail';
    protected $allowedFields = [
        'email', 'name', 'subject', 'message', 'created_date', 'active', 'read',
    ];
    protected $returnType = 'App\Entities\Email';
    protected $useTimestamps = false;
}
