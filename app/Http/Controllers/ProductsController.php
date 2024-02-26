<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.product');
    }

    public function category1() 
    {
        return view('products.category')
            ->with('nameProduct', 'Food Beverage');
    }

    public function category2() 
    {
        return view('products.category')
            ->with('nameProduct', 'Beauty Health');
    }

    public function category3() 
    {
        return view('products.category')
            ->with('nameProduct', 'Home Care');
    }

    public function category4() 
    {
        return view('products.category')
            ->with('nameProduct', 'Baby Kid');
    }
}
