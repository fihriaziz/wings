<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function prosess(Request $req)
    {
        $total = Product::sum('price');

        TransactionHeader::create([
            'document_code' => 'TRX',
            'document_number' => 001 + 1,
            'login_id' => Auth::user()->id,
            'total' =>  $total,
            'date' =>  date('Y-m-d H:i:s')
        ]);

        return redirect('/product-list')->with('message', 'Pembelian Berhasil');
    }

    public function checkoutPos(Request $req)
    {
        $total = Product::sum('price');
        $transaction = Product::get();
        // dd($transaction);

        TransactionHeader::create([
            'document_code' => 'TRX',
            'document_number' => 001 + 1,
            'login_id' => Auth::user()->id,
            'total' =>  $total,
            'date' =>  date('Y-m-d H:i:s')
        ]);

        foreach ($transaction as $t) {
            TransactionDetail::create([
                'document_code' => 'TRX',
                'document_number' => 001 + 1,
                'product_code' => $t->product_code,
                'price' => $t->price,
                'quantity' => $req->jumlah,
                'unit' => 'PCS',
                'sub_total' => $total,
                'currency' => 'IDR'
            ]);
        }

        return to_route('report');
    }
}
