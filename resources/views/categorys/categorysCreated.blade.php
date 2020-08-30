@extends('layouts.app')

@section('title', 'Categoria creada correctamente')
@section('body')
    <p>El producto: {{ $category->getName() }} fue creado correctamente</p>
@endsection
