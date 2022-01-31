<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sale extends Controller
{
    public  function sale(){
        return view('sale.sales');
    }
    public  function addSales(){
        return view('sale.add-sales');
    }
    public  function deletedSales(){
        return view('sale.deleted-sales');
    }

}
