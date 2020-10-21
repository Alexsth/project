<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.main');
    }



    // public function getCart()
    // {
    //     if (!Session::has('cart')) {
    //         return view('frontend.cart.cart', ['products' => null]);
    //     }
    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);

    //     return view('frontend.cart.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    // }

    // public function getCheckout()
    // {
    //     if (!Session::has('cart')) {
    //         return view('frontend.cart.cart', ['products' => null]);
    //     }
    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);
    //     return view('frontend.cart.checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    // }
}
