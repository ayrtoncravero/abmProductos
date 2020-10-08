<?php

namespace App\Repository;

use App\Product;

class ProductRepository
{
    public function save(Product $product) {
        $product->save();
    }

    /**
     * @return Product[]
     */
    public function listAllProducts() {
        return Product::query()->get();
    }

    public function findOrFail($id):Product {
        return Product::findOrFail($id);
    }

    public function destroy($id) {
        $product = $this->findOrFail($id);
        $product->delete();
    }

    public function searchByNameAndDescription(string $name) {
        return Product::where([
            ['name', 'like', '%' . $name . '%'],
            ['description', 'like', '%' . $name . '%']
        ])->get();
    }

    public function listProductsWithLOwStock() {
        return Product::where('stock', '<=', 5)->get();
    }

    public function searchByCodeOrFail(string $code):Product {
        return Product::query()->where('code', '=', $code)->firstOrFail();
    }
}
