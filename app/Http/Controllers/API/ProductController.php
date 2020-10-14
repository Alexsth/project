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
        $product = Product::where('products.slug',$slug)->first();
        $images = $product->productImages;
        return response()->json(['data' => $product], 200);
    }
}
