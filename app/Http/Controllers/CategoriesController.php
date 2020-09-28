<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repository\CategoryRepository;
use App\Repository\ProductService;
use App\Repository\ProviderRepository;
use App\Service\CategorysService;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoriesNew(){
        return view('categories/categoriesNew');
    }

    public function create(Request $request, CategorysService $service) {

        $this->validateRequest($request);

        $service->create($request->input('name'), $request->input('description'));

        return redirect(route('CategoriesController@categories'));
    }

    public function categories(CategoryRepository $categoryRepository){
        return view('categories/categories', ['categories' => $categoryRepository->allCategorys()]);
    }

    public function edit(string $id, CategoryRepository $repository){

        return view('categories/categoriesEdit', ['categories' => $repository->searchFindOrFail($id)]);
    }

    public function update(Request $request, string $id, CategorysService $service) {

        $this->validateRequest($request);

        $service->update($id, $request->input('name'), $request->input('description'));

        return redirect(route('CategoriesController@categories'));
    }

    public function destroyView(string $id, CategorysService $repository) {
        return view('categories/destroyView', ['categories' => $repository->searchFindOrFail($id)]);
    }

    public function destroy(string $id, CategorysService $repository) {
        $repository->destroy($id);
        return redirect(route('CategorieController@categories'));
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
    }
}
