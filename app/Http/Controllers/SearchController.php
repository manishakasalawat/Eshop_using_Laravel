<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class SearchController extends Controller
{
    public function search(){
         // return request(['search', 'category']);
        $products = products::latest()->search(request(['search', 'category']))->get();
        return view('products', ['products' => $products]);
    }
}
