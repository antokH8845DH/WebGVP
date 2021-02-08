<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductImageModel extends Model
{

    protected $table = 'productimage';
    protected $primaryKey = 'idProductImage';
    protected $allowedFields = [
        'idProductDetail', 'info', 'img', 'created_by', 'created_date', 'update_by', 'update_date', 'active'
    ];
    protected $returnType = 'App\Entities\ProductImage';
    protected $useTimestamps = false;
}
