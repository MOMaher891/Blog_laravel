<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            Session::flash('error', 'Email or Password invalid');
            return redirect('auth/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('auth/login');
    }
}
