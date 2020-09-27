<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Product;
use App\Purchase;
use App\Repository\PurchaseRepository;
use Illuminate\Http\Request;

use App\Repository\ProductRepository;

class PurchasesController extends Controller
{
    /**
     * @var PurchaseRepository
     */
    private $purchaseRepository;
    /**
     * @var ProductRepository
     */
    private $productRepository;

    public function __construct(ProductRepository $productRepository, PurchaseRepository $purchaseRepository)
    {
        $this->productRepository = $productRepository;
        $this->purchaseRepository = $purchaseRepository;
    }

    public function purchases() {
        return view('purchases/purchases');
    }

    public function purchasesCreate(Request $request) {

        $this->validateRequest($request);

        $code = $request->input('code');
        $quantity = $request->input('quantity');

        $product = $this->productRepository->searchFindOrFail($code);
        $product->changeStock($quantity);
        $purchase = new Purchase();
        $purchase->setQuantity($quantity);
        $purchase->setProduct($product);

        $this->productRepository->save($product);
        $this->purchaseRepository->save($purchase);
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'code' => 'required|unique:purchases',
            'quantity' => 'required|min:1',
        ]);
    }
}
