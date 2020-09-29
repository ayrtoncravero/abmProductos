<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Exceptions\InvalidQuantityException;
use App\Product;
use App\Purchase;
use App\Repository\PurchaseRepository;
use http\Exception\InvalidArgumentException;
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
        return view('purchases/purchases', ['products' => $this->productRepository->allProducts()]);
    }

    public function purchasesCreate(Request $request) {

        $this->validateRequest($request);

        $code = $request->input('code');
        $quantity = $request->input('quantity');
        $product = $request->input('product');

        //TODO:add messages
        if ($this->purchaseRepository->verifyIfCodeIsExist($code)) {
            throw new InvalidArgumentException();
        }

        $product = $this->productRepository->findOrFail($product);
        try {
            $product->changeStock($quantity);
        } catch (InvalidQuantityException $e) {
            return redirect()->back()->withErrors(['quantity' => $e->getMessage()]);
        }

        $purchase = new Purchase();

        $purchase->setQuantity($quantity);
        $purchase->setCode($code);

        $this->productRepository->save($product);
        $this->purchaseRepository->save($purchase);

        return redirect(route('ProductsController@products'));
    }

    public function addStock() {
        return view('purchases/addStock');
    }

    public function increaseStock(Request $request) {

        $this->validateRequest($request);

        $code = $request->input('code');
        $quantity = $request->input('quantity');

        $product = $this->productRepository->searchByCodeOrFail($code);
        $product->increaseStock($quantity);

        $this->productRepository->save($product);

        return redirect(route('ProductsController@products'));
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'code' => 'required',
            'quantity' => 'required|min:1',
        ]);
    }
}
