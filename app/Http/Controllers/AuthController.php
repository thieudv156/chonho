<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         // Authentication successful
    //         return redirect()->intended('/');
    //     } else {
    //         // Invalid credentials
    //         return back()->withErrors(['message' => 'Invalid credentials']);
    //     }
    // }

    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect('/');
    // }
}

