@extends('layouts.app')

@section('title', 'Proveedor creado correctamente')
@section('body')
    <p>El proveedor: {{ $provider->getName() }} fue creado correctamente</p>
@endsection
