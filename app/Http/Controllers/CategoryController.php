<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view('category/category');
    }
    public function categoryEdit(){
        return view('category/categoryEdit');
    }
    public function categoryDestroy(){
        return view('category/categoryDestroy');
    }
    public function categoryNew(){
        return view('category/categoryNew');
    }
}
