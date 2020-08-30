<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Producto;
use Illuminate\Http\Request;
use App\Categoria;
use App\Proveedor;

class ProductsController extends Controller
{
    public function products()
    {
        $products = Producto::all();
        return view('products/products', ['products' => $products]);
    }

    public function productsViewEdit(string $id)
    {
        $product = Producto::find($id);

        $providers = Proveedor::query()->get()->all();
        $category = Categoria::query()->get()->all();

        return view('products/productsEdit', ['product' => $product, 'providers' => $providers, 'categories' => $category]);
    }

    public function productsEdit(Request $request, string $id)
    {
        $this->validateRequest($request);

        $code = $request->input('code');
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $provider = $request->input('providers');
        $category = $request->input('category');


        $productEdit = Producto::find($id);

        $productEdit->setCode($code);
        $productEdit->setName($name);
        $productEdit->setDescription($description);
        $productEdit->setPrice($price);
        $productEdit->setProvider($provider);
        $productEdit->setCategory($category);

        $productEdit->save();

        return view('products/productsEdit', ['product' => $productEdit], ['id' => $id]);
    }

    public function productsDestroy(string $id)
    {
        $product = Producto::find($id);
        $product->delete();
        return redirect('products/products');
    }

    public function productsNew()
    {
        return view('products/productsNew');
    }

    public function productsCreate(Request $request)
    {
        $this->validateRequest($request);

        $code = $request->input('code');
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $provider = $request->input('providers');
        $category = $request->input('category');

        $products = new Producto();

        $products->setCode($code);
        $products->setName($name);
        $products->setDescription($description);
        $products->setPrice($price);
        $products->setProvider($provider);
        $products->setCategory($category);

        $products->save();

        return view('products/productCreated', ['products' => $products]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $product = Producto::where([
            ['name', 'like', '%' . $request->query('name') . '%'],
            ['description', 'like', '%' . $request->query('description') . '%']

        ])->get();

        return view('products/products', ['product' => $product]);
    }

    public function validateRequest(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:productos|min:1|max:6',
            'name' => 'required|min:10',
            'description' => 'required|min:10',
            'price' => 'required|min:1',
            'providers' => 'required',
            'category' => 'required',
        ]);
    }
}
