@extends('layouts.app')

@section('title', 'Home')

@section('body')

    <div>
        <input type="submit" onclick="changeMode()" value="Claro/Oscuro" class="button-primary u-pull-right">
    </div>
    <br>
    <div class="container">
        <div class="padre border">
            <div class="center"><a href="{{ URL::route('ProductsController@index') }}">Ver productos</a></div><br>
            <div class="center"><a href="{{ URL::route('ProvidersController@index') }}">Ver proveedores</a></div><br>
            <div class="center"><a href="{{ URL::route('CategoriesController@index') }}">Ver categoria</a></div><br>
            <div class="center"><a href="{{ URL::route('PurchasesController@createView') }}">Dar de alta una compra</a></div><br>
            <div class="center"><a href="{{ URL::route('PurchasesController@index') }}">Agregar stock</a></div><br>
            <div class="center"><a href="{{ URL::route('ReportsController@stock') }}">Ver informes</a></div>
        </div>
    </div>

@endsection
