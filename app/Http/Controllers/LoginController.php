<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Page Login'
        ]);
    }
    public function authenticate()
    {
        return request()->all();
    }
}
