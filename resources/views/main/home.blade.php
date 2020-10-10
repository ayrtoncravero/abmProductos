@extends('layouts.app')

@section('title', 'Home')

@section('body')

    <div>
        <input type="submit" onclick="changeMode()" value="Claro/Oscuro" class="button-primary">
    </div>

    <div class="container">
        <br><br><br><br><br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('ProductsController@index') }}">Ver productos</a></div>
            <div class="one-third column">&nbsp;</div>
        </div>
        <br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('ProvidersController@index') }}">Ver proveedores</a></div>
            <div class="one-third column">&nbsp;</div>
        </div>
        <br>
        <div class="row">
            <div class="one-third column">&nbsp;</div>
            <div class="one-third column"><a href="{{ URL::route('CategoriesController@index') }}">Ver categoria</a></div>
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
            <div class="one-third column"><a href="{{ URL::route('PurchasesController@index') }}">Agregar stock</a></div>
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
