<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // User::create([
        //     'full_name'=>"SIyaset",
        //     'email'=>"info@info.az",
        //     'password'=> Hash::make('12345'),

        // ]);
        return view('auth.login');
    }
public function store(Request $r)
{
    if(Auth::attempt(['email' => $r->email, 'password' => $r->password]))
    {
        return redirect()->route('dashboard');
    }

    return redirect()->route('logins.index')->withErrors('Email or Password is not entered correctly!');
}

public function logout()
{
    auth()->logout();
    return redirect()->route('logins.index');
}
  
}
