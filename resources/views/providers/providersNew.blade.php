@extends('layouts.app')

@section('title', 'Create providers')
@section('body')
    <h1>Crear proveedores</h1>
    <form action="ProvidersController@providers" method="POST">
        @csrf
        <label for="codProvider">Codigo del proveedor:</label><br>
        <input type="text" id="codProvider" name="codProvider"><br><br>
        <label for="nameProvider">Nombre:</label><br>
        <input type="text" id="nameProvider" name="nameProvider"><br><br>
        <label for="descriptionProvider">Descripcion:</label><br>
        <input type="text" id="descriptionProvider" name="descriptionProvider"><br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection
