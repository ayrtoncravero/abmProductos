<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function reports() {
        return view('reports/reports');
    }
    public function stock() {
        return view('reports/stock');
    }
}
