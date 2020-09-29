@extends('layouts.app')

@section('title', 'Home')

@section('body')
    <div class="container">
        <div class="row padre">
            <div class="">
                <a href="{{ URL::route('ProductsController@products') }}">Ver productos</a><br><br>
                <a href="{{ URL::route('ProvidersController@providers') }}">Ver proveedores</a><br><br>
                <a href="{{ URL::route('CategoriesController@categories') }}">Ver categoria</a><br><br>
                <a href="{{ URL::route('PurchasesController@purchases') }}">Dar de alta una compra</a><br><br>
                <a href="{{ URL::route('PurchasesController@addStock') }}">Agregar stock</a><br><br>
                <a href="{{ URL::route('ReportsController@reports') }}">Ver informes</a><br><br>
            </div>
        </div>
    </div>
@endsection
