<?php

use Illuminate\Http\Request;
use App\Product;

Route::get('products', function(){

    $products = Product::all();

    return view('products.index', compact('products'));
})->name('products.index');

Route::get('products/create', function(){
    return view('products.create');
})->name('products.create');

Route::post('products', function(Request $request){

//    return $request->all();
    $newProduct = new Product;
    $newProduct->description = $request->input('description');
    $newProduct->price = $request->input('price');
    $newProduct->save();

    return redirect()->route('products.index')->with('info', 'Producto creado existosamente');

})->name('products.store');