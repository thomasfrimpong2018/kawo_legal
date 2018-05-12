<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function startup(){
        return view('startups');
    }

    public function login(){
        return view('users.login');
    }

    public function register(){
        return view('users.register');
    }
}
