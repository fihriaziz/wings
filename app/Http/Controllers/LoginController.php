<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view_login()
    {
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $this->validate($req, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $req->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return to_route('list-product');
        } else {
            return 'Gagal';
        }
    }
}
