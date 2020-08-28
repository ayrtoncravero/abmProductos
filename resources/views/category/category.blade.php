@extends('layouts.app')

@section('title', 'Categorias')
@section('body')
    <h1>Categorias</h1>

    <table class="egt">
        <tr>
            <th>Codigo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="{{ URL::route('CategoryController@categoryEdit') }}">Editar</a></td>
            <td><a href="{{ URL::route('CategoryController@categoryDestroy') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td><a href="{{ URL::route('CategoryController@categoryEdit') }}">Editar</a></td>
            <td><a href="{{ URL::route('CategoryController@categoryDestroy') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>7</td>
            <td><a href="{{ URL::route('CategoryController@categoryEdit') }}">Editar</a></td>
            <td><a href="{{ URL::route('CategoryController@categoryDestroy') }}">Eliminar</a></td>
        </tr>
    </table>

    <a href="{{ URL::route('CategoryController@categoryNew') }}">Crear categoria</a><br>
@endsection
