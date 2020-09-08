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
        //TODO: search product, check if is exist, modify stock, setting into purchase and persist both
        $code = $request->input('code');
        $quantity = $request->input('quantity');

        $purchase = new Compra($code, $quantity);

        //TODO: move this into repository
        $purchase->save();

        //TODO: redirect to this view, not return data here
        return view('purchases/purchasesCreate', ['purchases' => $purchase], ['quantity' => $quantity]);
    }

}
