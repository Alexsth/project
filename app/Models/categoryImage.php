<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryImage extends Model
{
    use HasFactory;
    protected $fillable =[
        'image',
        'category_id'
    ];
}