<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\ProductService;
use App\Repository\ProviderRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * @var providerRepository
     */
    private $providerRespository;
    /**
     * @var categoryRepository
     */
    private $categoryRepository;
    /**
     * @var productRepository
     */
    private $productRepository;
    /**
     * @var productService
     */
    private $productService;

    public function __construct(ProviderRepository $repositoryProvider, CategoryRepository $repositoryCategory, ProductRepository $productRepository, ProductService $productService)
    {
        $this->providerRespository = $repositoryProvider;
        $this->categoryRepository = $repositoryCategory;
        $this->productRepository = $productRepository;
        $this->productService = $productService;
    }

    public function createView()
    {
        return view('products/createView', ['providers' => $this->providerRespository->allProviders(), 'categories' => $this->categoryRepository->findAll()]);
    }

    public function create(Request $request)
    {
        $this->validateRequest($request);

        $this->productService->create($request->input('code'),
            $request->input('name'),
            $request->input('description'),
            $request->input('price'),
            $request->input('provider'),
            $request->input('category')
        );

        return redirect(route('ProductsController@products'));
    }

    public function products()
    {
        return view('products/products', ['products' => $this->productRepository->listAllProducts()]);
    }

    public function edit(string $id)
    {
        return view('products/edit', ['product' => $this->productRepository->findOrFail($id), 'providers' => $this->providerRespository->allProviders(), 'categories' => $this->categoryRepository->findAll()]);
    }

    public function update(Request $request, string $id)
    {
        $this->validateRequest($request);

        $this->productService->update($id,
            $request->input('code'),
            $request->input('name'),
            $request->input('description'),
            $request->input('price'),
            $request->input('provider'),
            $request->input('category')
        );

        return redirect(route('ProductsController@products'));
    }

    public function destroyView(string $id)
    {

        return view('products/destroyView', ['product' => $this->productRepository->findOrFail($id)]);
    }

    public function destroy(string $id)
    {
        $this->productRepository->destroy($id);
        return redirect(route('ProductsController@products'));
    }

    public function search(Request $request)
    {
        $this->validateRequest($request);

        $name = $request->input("name");

        $products = $this->productRepository->searchByNameAndDescription($name);

        return view('products/products', ['products' => $products]);
    }

    public function validateRequest(Request $request)
    {
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
