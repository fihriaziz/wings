<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function products()
    {
        return $this->hasMany(Product::class, 'product_code', 'id');
    }
}
