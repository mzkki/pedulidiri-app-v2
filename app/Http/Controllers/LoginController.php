<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Page Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:16|max:16',
            'fullname' => 'required|string|max:255',
        ]);

        $nik = User::where('nik', $request->nik)->where('fullname', $request->fullname)->first();

        if ($nik) {

            Auth::login($nik);
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login Failed !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
