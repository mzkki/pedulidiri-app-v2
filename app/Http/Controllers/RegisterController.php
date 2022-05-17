<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Page Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|min:16|max:16|unique:users',
            'fullname' => 'required|string|max:255',
        ]);

        User::Create($validatedData);

        return redirect('/login')->with('success', 'User created successfully.');
    }
}
