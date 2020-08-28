<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function providers(){
        return view('providers/providers');
    }
    public function providersNew(){
        return view('providers/providersNew');
    }
    public function providersEdit(){
        return view('providers/providersEdit');
    }
    public function providersDestroy(){
        return view('providers/providersDestroy');
    }
}
