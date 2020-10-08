<?php

namespace App\Http\Controllers;

use App\Repository\ProductRepository;

class ReportsController extends Controller
{
    /**
     * @var productRepository
     */
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function stock()
    {
        $productList = [];

        $products = $this->productRepository->listProductsWithLOwStock();

        foreach ($products as $product) {
            array_push($productList, [
                'id' => $product->getId(),
                'code' => $product->getCode(),
                'name' => $product->getName(),
                'description' => $product->getDescription(),
                'price' => ($product->getPrice()->getAmount() / 100),
                'stock' => $product->getStock(),
                'provider' => $product->getProvider(),
                'category' => $product->getCategory(),
            ]);
        }

        return view('reports/stock', ['products' => $productList]);
    }
}
