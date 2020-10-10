@extends('layouts.app')

@section('title', 'Eliminar categoria')
@section('body')
    <div class="container">
        <h1>Eliminar categoria</h1>
        <form action="{{ route('CategoriesController@destroy', ['id' => $categories->getId()]) }}" method="POST">
            @method('DELETE')
            @csrf
            <p>¿Esta seguro de que desea eliminar la categoria?</p>
            <p>Nombre: {{ $categories->getName() }}</p>
            <input type="submit" value="Eliminar" class="button-primary"><br>
        </form>
        <form action="{{ route('CategoriesController@index') }}">
            <input type="submit" class="button-primary" value="Cancelar">
        </form>
    </div>
@endsection
