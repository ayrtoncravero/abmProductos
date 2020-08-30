@extends('layouts.app')

@section('title', 'Producto creado correctamente')
@section('body')
    <p>El producto: {{ $product->getName() }} fue creado correctamente</p>
@endsection
