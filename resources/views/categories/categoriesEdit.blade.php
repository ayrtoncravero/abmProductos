@extends('layouts.app')

@section('title', 'Editar categoria')
@section('body')
    <div class="container">
        <form action="{{ route('CategoriesController@update', ['id' => $categories->getId()]) }}" method="POST">
            <h1>Editar categoria</h1>
            @csrf
            <label>Nombre</label>
            <input type="text" name="name" value="{{ $categories->getName() }}">

            <label>Descripcion</label>
            <input type="text" name="description" value="{{ $categories->getDescription() }}"><br>

            <input class="button-primary" type="submit" value="Editar">
        </form>

        <a href="{{ route('CategoriesController@categories') }}">Regresar</a>
    </div>
@endsection
