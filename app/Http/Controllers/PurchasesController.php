<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function purchases() {
        return view('purchases/purchases');
    }

    public function purchasesCreate(Request $request) {
        $request->validate([
            'code' => 'required|unique:compras',
            'quantity' => 'required|min:1',
        ]);

        $code = $request->input('code');
        $quantity = $request->input('quantity');

        $purchase = new Compra($code, $quantity);

        $purchase->save();

        return view('purchases/purchasesCreate', ['purchases' => $purchase], ['quantity' => $quantity]);
    }

}
