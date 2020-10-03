@extends('layouts.app')

@section('title', 'Eliminar categoria')
@section('body')
    {{--@include('errors')--}}
    <div class="container">
        <form action="{{ route('CategoriesController@destroy', ['id' => $categories->getId()]) }}" method="POST">
            @method('DELETE')
            @csrf
            <p>¿Esta seguro de que desea eliminar la categoria?</p>
            <input type="submit" value="Eliminar" class="button-primary"><br>
        </form>
        <form action="{{ route('CategoriesController@categories') }}">
            <input type="submit" class="button-primary" value="Cancelar">
        </form>
    </div>
@endsection
