<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\ProductService;
use App\Repository\ProviderRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    #Reacomodando
    public function productsNew(ProviderRepository $providerRepository, CategoryRepository $categoryRepository)
    {
        return view('products/productsNew', ['providers' => $providerRepository->allProviders(), 'categories' => $categoryRepository->allCategorys()]);
    }

    public function create(Request $request, ProductService $service)
    {
        $this->validateRequest($request);

        $service->create($request->input('code'),
            $request->input('name'),
            $request->input('description'),
            $request->input('price'),
            $request->input('provider'),
            $request->input('category')
        );

        return redirect(route('ProductsController@products'));
    }

    public function products(ProductRepository $productRepository)
    {
        return view('products/products', ['products' => $productRepository->allProducts()]);
    }

    public function edit(string $id, ProductRepository $repository, ProviderRepository $providerRepository, CategoryRepository $categoryRepository)
    {
        return view('products/edit', ['product' => $repository->searchFindOrFail($id), 'providers' => $providerRepository->allProviders(), 'categories' => $categoryRepository->allCategorys()]);
    }

    public function update(Request $request, string $id, ProductService $service)
    {
        $this->validateRequest($request);

        $service->update($id, $request->input('code'), $request->input('name'), $request->input('description'), $request->input('price'), $request->input('provider'), $request->input('category'));

        return redirect(route('ProductsController@products'));
    }

    public function destroyView(string $id, ProductRepository $repository) {

        return view('products/destroyView', ['product' =>$repository->searchFindOrFail($id)]);
    }

    public function destroy(string $id, ProductRepository $repository) {
        $repository->destroy($id);
        return redirect(route('ProductsController@products'));
    }

    public function search(Request $request, ProductRepository $productRepository)
    {
        $products = '';

        $this->validateRequest($request);

        $productRepository->searchForNameAndDescription($request);

        return view('products/products', ['products' => $products]);
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'provider' => 'required',
            'category' => 'required',
        ]);
    }
}
