<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'intro_desc',
        'description',
        'price',
        'discount',
        'meta_title',
        'meta_description',
        'meta_keywords'

    ];
}
