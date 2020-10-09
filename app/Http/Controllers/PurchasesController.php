<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidQuantityException;
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

    public function createView()
    {
        return view('purchases/createView', ['products' => $this->productRepository->listAllProducts()]);
    }

    public function create(Request $request)
    {
        $this->validateRequest($request);

        $code = $request->input('code');
        $quantity = $request->input('quantity');
        $product = $request->input('product');

        if ($this->purchaseRepository->verifyIfCodeIsExist($code))
        {
            throw new \InvalidArgumentException('Codigo no existente');
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

    public function stockView()
    {
        return view('purchases/stockView');
    }

    public function stock(Request $request)
    {

        $this->validateRequest($request);

        $code = $request->input('code');
        $quantity = $request->input('quantity');

        $product = $this->productRepository->searchByCodeOrFail($code);
        $product->increaseStock($quantity);

        $this->productRepository->save($product);

        return redirect(route('ProductsController@products'));
    }

    public function validateRequest(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'quantity' => 'required|min:1',
        ]);
    }
}
