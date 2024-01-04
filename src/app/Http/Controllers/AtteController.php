<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtteController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function stamp(){
        return view('auth.stamp');
    }

    public function login(){
        return view('auth.stamp');
    }
}
