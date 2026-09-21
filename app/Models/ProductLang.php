<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductLang extends Model
{
    protected $table = "product_lang";

    protected $fillable = [
        'product_id',
        'language_id',
        'productname',
        'iupac_name',
        'cas_number',
        'hs_code',
        'formula',
        'common_names',
        'description',
        'application',
    ];

    public function product(){
        return $this->hasOne(Product::class, 'product_id');
    }
}
