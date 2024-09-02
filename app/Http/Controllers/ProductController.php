<?php

namespace App\Http\Controllers;

use App\Models\{Product};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function adding (Request $request) {
        try{
            Product::create($request->all());
            return response()->json("Product added successfully");
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
    }

    public function edit (Request $request) {
        try{
           Product::find($request->id)->update($request->all()); 
           return response()->json('Product updated successfuly');
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
    }

    public function delete (Request $request) {
        try{
            Product::find($request->id)->delete();
            return response()->json('Product deleted successfuly');
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
    }

    public function show () {
        try{
            $data = Product::query()->select(["products.*"])->get();
            return response()->json($data);
        }catch(\Exception $ex){
        return $ex->getMessage();
        }
    }
}
