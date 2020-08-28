@extends('layouts.app')

@section('title', 'Home')
@section('body')
    <a href="{{ URL::route('ProductsController@products') }}">Ver productos</a><br><br>
    <a href="{{ URL::route('ProvidersController@providers') }}">Ver proveedores</a><br><br>
    <a href="{{ URL::route('CategoryController@category') }}">Ver categoria</a><br><br>
    <a href="{{ URL::route('PurchaseController@purchase') }}">Dar de alta una compra</a><br><br>
    <a href="{{ URL::route('ReportsController@reports') }}">Ver informes</a><br><br>
@endsection
