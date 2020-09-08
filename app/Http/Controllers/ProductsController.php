<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Producto;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\ProductService;
use App\Repository\ProviderRepository;
use Illuminate\Http\Request;
use App\Categoria;
use App\Proveedor;

class ProductsController extends Controller
{
    #Reacomodando
    public function productsNew(ProviderRepository $providerRepository, CategoryRepository $categoryRepository)
    {
        return view('products/productsNew', ['providers' => $providerRepository->allProviders(), 'categories' => $categoryRepository->allCategory()]);
    }

    public function create(Request $request, ProductService $service)
    {
        //Esta validacion esta aqui solo por que es propia del code, per va tambien al service
        $this->validateRequest($request);

        $service->create($request->input('code'),
            $request->input('name'),
            $request->input('description'),
            $request->input('price'),
            $request->input('provider'),
            $request->input('category')
        );
        //TODO: delete this comment
        //Retorno a la vista por que ya se creo el producto
        return redirect(route('ProductsController@products'));
    }

    public function products(ProductRepository $productRepository)
    {
        return view('products/products', ['products' => $productRepository->allProducts()]);
    }

    public function edit(string $id, ProductRepository $repository)
    {
        return view('edit', ['product' => $repository->searchFindOrFail($id)]);

        //TODO: delete comment's code
        #Antes
        //$product = Producto::find($id);
        //$providers = Proveedor::query()->get()->all();
        //$category = Categoria::query()->get()->all();
        //return view('products/productsEdit', ['product' => $product, 'providers' => $providers, 'categories' => $category]);
    }

    public function update(Request $request, string $id, ProductService $service)
    {
        $this->validateRequest($request);

        $service->update($id, $request->input('code'), $request->input('name'), $request->input('description'), $request->input('price'), $request->input('provider'), $request->input('category'));

        return redirect(route('ProductsController@products'));

        //TODO: delete comment's code
        #Antes
        //$code = $request->input('code');

        //$product = Producto::query()->where('code', '=', $code)->first();

        //if (isset($product) && $product->getId() !== (int)$id) {
        //    return redirect()->back()->withErrors(['code' => 'the code has already been taken']);
        //}

        //$name = $request->input('name');
        //$description = $request->input('description');
        //$price = $request->input('price');
        //$providerId = $request->input('providers');
        //$categoryId = $request->input('category');

        //$productEdit = Producto::find($id);

        //$provider = Proveedor::find($providerId);
        //$category = Categoria::find($categoryId);

        //$productEdit->setCode($code);
        //$productEdit->setName($name);
        //$productEdit->setDescription($description);
        //$productEdit->setPrice($price);
        //$productEdit->setProvider($provider);
        //$productEdit->setCategory($category);

        //$productEdit->save();

        //return redirect(route('ProductsController@products'));
    }

    public function destroyView(string $id, ProductRepository $repository) {

        return view('products/destroyView', ['product' =>$repository->searchFindOrFail($id)]);
    }

    public function destroy(string $id, ProductRepository $repository) {
        $repository->destroy($id);
        return redirect(route('ProductsController@products'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        //TODO: move into repository
        $product = Producto::where([
            ['name', 'like', '%' . $request->query('name') . '%'],
            ['description', 'like', '%' . $request->query('name') . '%']
        ])->get();

        return view('products/products', ['product' => $product]);
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'providers' => 'required',
            'category' => 'required',
        ]);
    }








}
