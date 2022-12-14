<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = ['document_code', 'document_number', 'product_code', 'price', 'quantity', 'unit', 'sub_total', 'currency'];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_code', 'id');
    }
}
