<?php

namespace App\Repository;

use App\Product;
use http\Env\Request;

class ProductRepository
{
    public function save(Product $product) {
        $product->save();
    }

    public function allProducts() {
        return Product::query();
    }

    public function searchFindOrFail($id):Product {
        return Product::findOrFail($id);
    }

    public function destroy($id) {
        $product = $this->searchFindOrFail($id);
        $product->delete();
    }

    public function searchForNameAndDescription(Request $request) {
        return $product = Product::where([
            ['name', 'like', '%' . $request->query('name') . '%'],
            ['description', 'like', '%' . $request->query('name') . '%']
        ])->get();

        //return $product;
    }

    public function lowStock() {
        return Product::where('stock', '<=', 0)->get();
    }

    public function searchByCodeOrFail(string $code) {
        return Product::query()->where('code', '=', $code)->firstOrFail();
    }
}
