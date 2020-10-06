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
        return view('reports/stock', ['products' => $this->productRepository->listProductsWithLOwStock()]);
    }
}
