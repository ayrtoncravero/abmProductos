@extends('layouts.app')

@section('title', 'Editar categoria')
@section('body')
    <h1>Editar categoria</h1>

    <form action="{{ route('CategoriesController@update', ['id' => $categories->getId()]) }}" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name" value="{{ $categories->getName() }}">

        <label>Descripcion</label>
        <input type="text" name="description" value="{{ $categories->getDescription() }}"><br>

        <input class="button-primary" type="submit" value="Editar">
    </form>
@endsection
