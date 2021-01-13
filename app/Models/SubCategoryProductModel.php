<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCategoryProductModel extends Model
{

    protected $table = 'productsubcategory';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'idProductCategory', 'subCategory', 'created_by', 'created_date', 'update_by', 'update_date', 'active'
    ];
    protected $useTimestamps = false;
}
