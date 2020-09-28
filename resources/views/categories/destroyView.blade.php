@extends('layouts.app')

@section('title', 'Eliminar categoria')
@section('body')
    {{--@include('errors')--}}
    <form action="{{ route('CategoriesController@destroy', ['id' => $categories->getId()]) }}" method="POST">
        @method('DELETE')
        @csrf
        <p>¿Esta seguro de que desea eliminar la categoria?</p>
        <input type="submit" value="Eliminar" class="button-primary"><br>
        <a href="{{ route('CategoriesController@categories') }}">Cancelar</a>
    </form>
@endsection
