<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    protected $fillable = [
        'business_id',
        'phy_appear_id',
        'productimage',
        'productimage2',
        'productimage3',
        'productimage4',
        'msds_file',
        'publish',
        'delete_status'
    ];

    public function productLang(){
        return $this->hasOne(ProductLang::class, 'product_id');
    }

}
