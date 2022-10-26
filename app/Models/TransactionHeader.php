<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_code', 'document_number', 'login_id', 'total', 'date'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
