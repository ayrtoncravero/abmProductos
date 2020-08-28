@extends('layouts.app')

@section('title', 'Categorias')
@section('body')
    <p>Crear producto, aca va el form, y falta hacer el post para pegarle con la creacion del producto, ver si eso va en el servive</p>
    <h1>Crear producto</h1>
    <form action="ProductsController@createProduct" method="POST">
        @csrf
        <label for="codeProduct">Codigo:</label><br>
        <input type="number" id="codeProduct" name="codeProduct"><br><br>

        <label for="nameProduct">Nombre:</label><br>
        <input type="text" id="nameProduct" name="nameProduct"><br><br>

        <label for="descriptionProduct">Descripcion:</label><br>
        <input type="text" id="descriptionProduct" name="descriptionProduct"><br><br>

        <label for="priceProduct">Precio:</label><br>
        <input type="number" id="priceProduct" name="priceProduct"><br><br>

        <label for="providerProduct">Proveedor:</label><br>
        <input type="text" id="providerProduct" name="providerProduct"><br><br>

        <label for="categoryProduct">Categoria:</label><br>
        <input type="text" id="categoryProduct" name="categoryProduct"><br><br>

        <input type="submit" value="Crear">
    </form>
@endsection
