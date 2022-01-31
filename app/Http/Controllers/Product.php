<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public  function product(){
        return view('index');
    }
    public  function addProduct(){
        return view('product.add-product');
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
