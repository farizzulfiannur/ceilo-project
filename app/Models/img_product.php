<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class img_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_photo',
    ];
    public function products(){
        return $this->belongsTo(product::class);
    }
}
