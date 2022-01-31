<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Purchase extends Controller
{
    public  function purchase(){
        return view('purchase.purchase');
    }
    public  function addPurchase(){
        return view('purchase.add-purchase');
    }
    public  function deletedPurchase(){
        return view('purchase.deleted-purchase');
    }
    
}
