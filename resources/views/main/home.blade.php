@extends('layouts.app')

@section('title', 'Home')

@section('body')
    <div class="container">
        <br><br><br><br><br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('ProductsController@products') }}">Ver productos</a></div>
            <div class="one-third column">&nbsp;</div>
        </div>
        <br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('ProvidersController@providers') }}">Ver proveedores</a></div>
            <div class="one-third column">&nbsp;</div>
        </div>
        <br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('CategoriesController@categories') }}">Ver categoria</a></div>
            <div class="one-third column">&nbsp;</div>
        </div>
        <br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('PurchasesController@createView') }}">Dar de alta una compra</a></div>
            <div class="one-third column">&nbsp;</div>
        </div>
        <br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('PurchasesController@stockView') }}">Agregar stock</a></div>
            <div class="one-third column">&nbsp;</div>
        </div>
        <br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('ReportsController@stock') }}">Ver informes</a></div>
            <div class="one-third column">&nbsp;</div>
        </div>
        <br><br><br><br><br>
    </div>
@endsection
