<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

    public function loginPost()
    {
    }
    public function registerPost()
    {
    }
}
