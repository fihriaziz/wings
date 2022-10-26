<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionHeaderController extends Controller
{
    public function transaction(Request $req)
    {
        $total = Product::sum('price');
        $transaction = TransactionHeader::with('products')->get();
        // dd($transaction);
        foreach ($transaction as $t) {
            TransactionDetail::create([
                'document_code' => 'TRX',
                'document_number' => 001,
                'product_code' => $t->product_code,
                'price' => $t->price,
                'quantity' => $req->jumlah,
                'unit' => 'PCS',
                'sub_total' => $total,
                'currency' => 'IDR'
            ]);
        }
    }
}
