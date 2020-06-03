<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   /* public function index(){
        return 'Hello From HomeController';
    }*/
    public function index(){
        return view('public.home',['name'=>'"Stelqna"']);
    }

}
