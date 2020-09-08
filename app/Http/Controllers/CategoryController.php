<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Repository\ProductService;
use App\Repository\ProviderRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorysNew(){
        return view('categorys/categorysNew');
    }
    //TODO: change name to correctly english name (categories)
    public function categorysCreate(Request $request, CategotyService $service) {

        $this->validatorRequest($request);

        $service->create($request->input('name'), $request->input('description'));

        return redirect(route('CategorysController@category'));
        //TODO: delete comment's code
        //$name = $request->input('name');
        //$description = $request->input('description');

        //$categorys = new Categoria();

        //$categorys->setName($name);
        //$categorys->setDescription($description);

        //$categorys->save();

        //return view('categorys/categorysCreated', ['categorys' => $categorys]);
    }

    public function categorys(CategoryController $categoryRepository){
        //TODO: change name to correctly english name (categories)
        return view('categorys', ['categorys' => $categoryRepository->allCategorys()]);
    }

    public function edit(string $id, CategoryRepository $repository){

        return view('edit', ['category' => $repository->searchFindOrFail($id)]);
        //TODO: delete comment's code
        //$this->validatorRequest($request);

        //$name = $request->input('name');

        //$categorys = Categoria::query()->where('name', '=', $name)->first();

        //if (isset($category) && $category->getId() !== (string)$name) {
        //    return redirect()->back()->withErrors(['code' => 'the code has already been taken']);
        //}

        //$name = $request->input('name');
        //$description = $request->input('description');

        //$categorysEdit = Categoria::find($id);

        //$categorysEdit->setName($name);
        //$categorysEdit->setDescription($description);

        //$categorysEdit->save();

        //return redirect(route('CategorysController@categorys'));
    }

    public function update(Request $request, string $id, CategoryService $service) {

        $this->validateRequest($request);

        $service->update($id, $request->input('name'), $request->input('description'));

        return redirect(route('CategoryController@category'));
    }

    public function destroyView(string $id, CategoryRepository $repository) {
        return view('category/destroyView', ['category' => $repository-searchFindOrFail($id)]);
    }

    public function destroy(string $id, CategoryRepository $repository) {
        $repository->destroy($id);
        return redirect(route('CategoryController@category'));
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
    }
}
