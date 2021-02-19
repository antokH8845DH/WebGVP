<?php

namespace App\Models;

use CodeIgniter\Model;

class HeaderImageModel extends Model
{

    protected $table = 'headerimage';
    protected $primaryKey = 'idHeaderImage';
    protected $allowedFields = [
        'order', 'image', 'active', 'created_date', 'created_by', 'updated_date', 'updated_by', 'original'
    ];
    protected $returnType = 'App\Entities\headerImage';
    protected $useTimestamps = false;
}
