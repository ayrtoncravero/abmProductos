@extends('layouts.app')

@section('title', 'Productos con bajo stock')
@section('body')
    <a href="{{ URL::route('StockController@stock') }}">Productos con stock menor a 5</a>
@endsection
