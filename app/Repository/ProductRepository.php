<?php

namespace App\Repository;

use App\Producto;

class ProductRepository
{
    public function save(Producto $product) {
        $product->save();
    }

    public function allProducts() {
        return Producto::query();
    }

    public function searchFindOrFail($id):Producto {
        return Producto::findOrFail($id);
    }

    public function destroy($id) {
        $product = $this->searchFindOrFail($id);
        $product->delete();
    }

    //Traer aca la busqueda del producto por descripcion y nombre


    public function lowStock() {
        return Producto::where('stock', '<=', 0)->get();
    }
}
