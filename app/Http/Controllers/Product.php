<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use DB;

class Product extends Controller
{
    public  function product(){
        $product = DB::table('products')
                    ->orderBy('id','DESC')
                    ->get();
        return view('index',compact('product'));
    }
    public  function addProduct(){
        $data = array();
        $data = DB::table('category')
                    ->orderBy('id','DESC')
                    ->get();
        return view('product.add-product', compact('data') );
    }
    public  function addProductInsert(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'category' => 'required',
            'product_type' => 'required'
        ]);
        dd($request->name);
    }
    public  function deletedProduct(){
        return view('product.deleted-product');
    }

    public  function category(){
        return view('product.category');
    }
    public  function addCategory(){
        return view('product.add-category');
    }
    public  function deletedCategory(){
        return view('product.deleted-category');
    }
}
