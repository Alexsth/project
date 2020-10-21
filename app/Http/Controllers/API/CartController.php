<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use Illuminate\Http\Request;
use App\Models\Orders;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Orders::create([
            ''
        ]);    
    }
}
