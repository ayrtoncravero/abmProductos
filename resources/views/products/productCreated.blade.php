@extends('layouts.app')

@section('title', 'Producto creado correctamente')
@section('body')
    <p>El producto: {{ $products->getName() }} fue creado correctamente</p>
@endsection
