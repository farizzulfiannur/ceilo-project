<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kata_mereka extends Model
{
    use HasFactory;

    protected $fillable = [
        'testi_name',
        'testi_desc',
        'testi_img',
    ];
}
