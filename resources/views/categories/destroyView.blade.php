@extends('layouts.app')

@section('title', 'Eliminar categoria')
@section('body')
    <div class="container">

        <div class="center">
            <h1>Eliminar categoria</h1>
        </div>

        <div class="center">
            <form action="{{ route('CategoriesController@destroy', ['id' => $categories->getId()]) }}" method="POST">
                @method('DELETE')
                @csrf
                <p>¿Esta seguro de que desea eliminar la categoria?</p>
                <p>Nombre: {{ $categories->getName() }}</p>
                <div class="center">
                    <input type="submit" value="Eliminar" class="button-primary">
                </div>
            </form>
        </div>

        <div class="center">
            <form action="{{ route('CategoriesController@index') }}">
                <div class="center">
                    <input type="submit" class="button-primary" value="Cancelar">
                </div>
            </form>
        </div>
    </div>
@endsection
