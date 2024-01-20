<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout extends Controller
{
    public function store()
    {
        auth()->logout();
        return redirect()->route('login.index');
    }
}