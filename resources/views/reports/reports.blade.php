@extends('layouts.app')

@section('title', 'Reporte de stock')
@section('body')
    <a href="{{ route('ReportsController@stock') }}">Productos con stock bajo</a>
    <br><br>
    <a href="{{ route('HomeController@home') }}">Ir al inicio</a>
@endsection
