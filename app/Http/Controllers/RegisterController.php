<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:25',
            'username' => 'required|unique:users|min:3',
            'password' => 'required|min:8|confirmed',
            'email' => 'required|email|unique:users'
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);
        return redirect()->route('login.index');
    }
}