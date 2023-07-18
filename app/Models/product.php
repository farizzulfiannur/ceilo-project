<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_category',
        'product_img',
        'product_link',
    ];

    public function img_products(){
        return $this->hasMany(img_product::class);
    }
}
