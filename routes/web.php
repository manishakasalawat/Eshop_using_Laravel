<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;
//use App\Models\Category;
//use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\ProductsController;
//App\Http\Controllers\Admin\ProductsController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ ', function () {
    $products = Products::all();
    return view('products',['products' => $products]);
 });

Route::get('/products/{products}', function (Products $products) {   //route model binding
            //$product= Product::find($id);
	//print($products);
    return view('products',['products' => $products]);
});

Route::get('/create_product', function(){
    Products::create([
        'product_name' => 'Laptop',
        'product_desc' => 'This is Dell Laptop with much functionality',
        'price' => '150000'

    ]);

});

Route::get('/get_product', function(){
    $products = Products::get();
    return $products;

});

Route::get('/create_post', function(){
    Post::create([
        'post_name' => 'Update',
        'post_desc' => 'No stocks available'

    ]);

});
Route::get('/home', [ProductsController::class,'index']);
    //return view('home');



Route::get('/categories/{category}', function(Category $category){
    //$products = Product::whereCategoryId($category->id)->get();
    $products = $category->products;
    return view('category', ['products' => $products, 'category' => $category]);

});


//admin routing

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/products', [App\Http\Controllers\Admin\ProductsController::class, 'index'])->name('products_list');

Route::get('/admin/products/create', [App\Http\Controllers\Admin\ProductsController::class, 'create'])->name('create_product');

Route::post('/admin/products/store', [App\Http\Controllers\Admin\ProductsController::class, 'store']);

Route::get('/admin/products/edit/{product}', [App\Http\Controllers\Admin\ProductsController::class, 'edit']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';