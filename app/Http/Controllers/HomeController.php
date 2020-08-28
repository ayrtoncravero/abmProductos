<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    #Return home view
    public function home(){
        return view('main/home');
    }
}
