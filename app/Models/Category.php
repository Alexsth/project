<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'parent',
        'slug'
    ];
    public function parentCategory(){
        return $this->hasOne('App\Models\Category','parent','id');
    }
}
