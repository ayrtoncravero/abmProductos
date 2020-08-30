@extends('layouts.app')

@section('title', 'Compra registrada')
@section('body')
    <p>La compra: {{ $purchases->getName() }} de la cantidad: {{ $purchases->getQuantity() }} fue registrada con exito</p>
@endsection
