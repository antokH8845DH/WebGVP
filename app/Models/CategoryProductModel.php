<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryProductModel extends Model
{

    protected $table = 'productcategory';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'category', 'created_by', 'created_date', 'update_by', 'update_date', 'active'
    ];
    protected $useTimestamps = false;
}
