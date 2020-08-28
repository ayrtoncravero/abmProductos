@extends('layouts.app')

@section('title', 'Crear categoria')
@section('body')
    <h1>Crear categoria</h1>
    <form action="CategoryController@createCategory" method="POST">
        @csrf
        <label for="nameCategory">Nombre de la categoria:</label><br>
        <input type="text" id="nameCategory" name="nameCategory"><br><br>
        <label for="descriptionCategory">Descripcion de la categoria:</label><br>
        <input type="text" id="descriptionCategory" name="descriptionCategory"><br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
