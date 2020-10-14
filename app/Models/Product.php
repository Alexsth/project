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
        'feature_image',
        'meta_title',
        'meta_description',
        'meta_keywords'

    ];

    public function productImages(){
        return $this->hasMany('App\Models\ProductImage','product_id', 'id');
   }
}
