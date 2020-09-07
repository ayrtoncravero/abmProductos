<?php

namespace App\Http\Controllers;

use App\Repository\ProductRepository;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function reports() {
        return view('reports/reports');
    }
    public function stock(ProductRepository $productsRepository) {
        return view('reports/stock', ['products' => $productsRepository->lowStock()]);
    }
}
