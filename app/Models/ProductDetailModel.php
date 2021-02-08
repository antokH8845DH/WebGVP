<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductDetailModel extends Model
{

    protected $table = 'productdetail';
    protected $primaryKey = 'idProductDetail';
    protected $allowedFields = [
        'idProductSubCategory', 'product_brand', 'product_type', 'product_name',
        'product_description', 'product_specification', 'judul_other', 'other_information',
        'otherimage', 'created_by', 'created_date', 'update_by', 'update_date', 'active'
    ];
    protected $returnType = 'App\Entities\ProductDetail';
    protected $useTimestamps = false;
}
