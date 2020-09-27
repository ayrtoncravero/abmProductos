<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Repository\CategoryRepository;
use App\Repository\ProductService;
use App\Repository\ProviderRepository;
use App\Service\CategorysService;
use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function categorysNew(){
        return view('categorys/categorysNew');
    }

    public function create(Request $request, CategorysService $service) {

        $this->validateRequest($request);

        $service->create($request->input('name'), $request->input('description'));

        return redirect(route('CategorysController@category'));
    }

    public function categorys(CategoryRepository $categoryRepository){
        return view('categorys/categorys', ['categorys' => $categoryRepository->allCategorys()]);
    }

    public function edit(string $id, CategorieRepository $repository){

        return view('edit', ['categorys' => $repository->searchFindOrFail($id)]);
    }

    public function update(Request $request, string $id, CategorysService $service) {

        $this->validateRequest($request);

        $service->update($id, $request->input('name'), $request->input('description'));

        return redirect(route('CategorieController@categorie'));
    }

    public function destroyView(string $id, CategorysService $repository) {
        return view('categorie/destroyView', ['categorie' => $repository-searchFindOrFail($id)]);
    }

    public function destroy(string $id, CategorysService $repository) {
        $repository->destroy($id);
        return redirect(route('CategorieController@categorie'));
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
    }
}
