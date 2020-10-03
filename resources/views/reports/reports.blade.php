@extends('layouts.app')

@section('title', 'Reporte de stock')
@section('body')
    <div class="container">
        <a href="{{ route('ReportsController@stock') }}">Productos con stock menor a 5</a>
        <br><br>
        <a href="{{ route('HomeController@home') }}">Regresar</a>
    </div>
@endsection
