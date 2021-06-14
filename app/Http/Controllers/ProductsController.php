<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductsController extends Controller
{
    public function index(){
        $products = products::latest()->get();
        return view('home', ['products' => $products]);
    }
    public function show(products $product){
        return view('product', compact('product') );
    }
    public function search (){
        return 'this is search';
    }
}
