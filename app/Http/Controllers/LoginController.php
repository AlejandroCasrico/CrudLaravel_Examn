<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($validation)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors(['email'=>'The email do not match'])
        ->withErrors(['password'=>'The password do not match']);
    }
}