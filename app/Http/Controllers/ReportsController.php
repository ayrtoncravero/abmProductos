<?php

namespace App\Http\Controllers;

use App\Repository\ProductRepository;
use Illuminate\Http\Request;

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

    public function reports()
    {
        return view('reports/reports');
    }

    public function stock()
    {
        return view('reports/stock', ['products' => $this->productRepository->lowStock()]);
    }
}
