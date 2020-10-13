<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return ProductResource::collection(Product::all());
    }

    public function productDetail($slug){
        return Product::where('slug',$slug)->first();
    }
}
