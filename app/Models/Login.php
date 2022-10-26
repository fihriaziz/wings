<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Authenticable
{
    use HasFactory;

    protected $table = 'login';

    protected $fillable = [
        'username', 'password'
    ];
}
