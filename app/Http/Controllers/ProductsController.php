<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    #Home
    //public function home(){
    //    return view('main/home');
    //}

    #Providers
   // public function providers(){
     //   return view('providers/providers');
    //}
    //public function providersNew(){
    //    return view('providers/providersNew');
    //}
    //public function providersEdit(){
    //    return view('providers/providersEdit');
    //}
    //public function providersDestroy(){
    //    return view('providers/providersDestroy');
    //}

    #Category
    //public function category(){
       // return view('category/category');
    //}
    //public function categoryEdit(){
      //  return view('category/categoryEdit');
    //}
    //public function categoryDestroy(){
     //   return view('category/categoryDestroy');
    //}
    //public function categoryNew(){
     //   return view('category/categoryNew');
    //}

    #Products
    #AllProducts
    public function products(){
        return view('products/products');
    }
    public function productEdit(){
        return view('products/productEdit');
    }
    public function productsDestroy(){
        return view('products/productsDestroy');
    }
    public function productsNew(){
        return view('products/productsNew');
    }

    #Dar de alta una compra - confirmar compra
   // public function purchase(){
    //    return view('purchase/purchase');
    //}

    #Ver informes
    //public function reports(){
      //  return view('reports/reports');
    //}
    //public function reportsStock(){
     //   return view('reports/reportsStock');
    //}
}
