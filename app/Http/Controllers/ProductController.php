<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view_list()
    {
        $product = Product::all();
        return view('product.product_list', compact('product'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('product.detail', compact('product'));
    }

    public function checkout(Request $req)
    {
        $product = Product::all();
        $sum = Product::sum('price');
        return view('product.checkout', compact('product', 'sum'));
    }
}
