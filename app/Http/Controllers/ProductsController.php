<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(){
        
        $products =\App\Product::take(20)->get();
        //return $products;
        return view('product')->withProducts($products);
    }
}
