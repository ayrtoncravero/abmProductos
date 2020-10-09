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

    public function searchByNameAndDescription($search) {
        return Product::where([
            ['name', 'like', '%' . $search . '%'],
            ['description', 'like', '%' . $search . '%']
        ])->get();
    }

    public function listProductsWithLOwStock() {
        return Product::where('stock', '<=', 5)->get();
    }

    public function searchByCodeOrFail(string $code):Product {
        return Product::query()->where('code', '=', $code)->firstOrFail();
    }
}
