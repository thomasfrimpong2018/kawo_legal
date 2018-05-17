<?php

namespace App\Http\Controllers;
use App\StartUp;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function startup(){
        $startups=Startup::where('status','Approved')->paginate(10);

        return view('startups')->with('startups',$startups);
    }

    public function login(){
        return view('users.login');
    }

    public function register(){
        return view('users.register');
    }

    public function showDetails($id){
        $startup=Startup::find($id);
        $comments=$startup->comment;

        return view('detailed1',compact('startup','comments'));


    }

    
}
