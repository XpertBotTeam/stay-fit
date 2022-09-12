<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{ use  HasFactory;
    //
    public function productList()
    {
        $products = Product::all();

        return view('components.products', compact('products'));
    }
}
