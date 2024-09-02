<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ProductController::class)->group(function (){
    Route::post("/add/product/", 'adding');
    Route::put("/edit/product/", 'edit');
    Route::delete("/delete/product/", 'delete');
    Route::get("/show/all/avaliable/products/" , "show");
});
