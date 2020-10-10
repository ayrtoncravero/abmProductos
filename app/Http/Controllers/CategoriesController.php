<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepository;
use App\Service\CategoriesService;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * @var categoryRepository
     */
    private $categoryRepository;
    /**
     * @var categoriesService
     */
    private $categoriesService;

    public function __construct(CategoryRepository $repository, CategoriesService $service)
    {
        $this->categoryRepository = $repository;
        $this->categoriesService = $service;
    }

    public function createView()
    {
        return view('categories/createView');
    }

    public function create(Request $request)
    {

        $this->validateRequest($request);

        $this->categoriesService->create($request->input('name'), $request->input('description'));

        return redirect(route('CategoriesController@index'));
    }

    public function index()
    {
        return view('categories/index', ['categories' => $this->categoryRepository->findAll()]);
    }

    public function editView(string $id)
    {
        return view('categories/editView', ['categories' => $this->categoryRepository->searchFindOrFail($id)]);
    }

    public function update(Request $request, string $id)
    {
        $this->validateRequest($request);

        $this->categoriesService->update($id, $request->input('name'), $request->input('description'));

        return redirect(route('CategoriesController@categories'));
    }

    public function destroyView(string $id)
    {
        return view('categories/destroyView', ['categories' => $this->categoryRepository->searchFindOrFail($id)]);
    }

    public function destroy(string $id)
    {
        $this->categoryRepository->destroy($id);

        return redirect(route('CategoriesController@index'));
    }

    public function validateRequest(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
    }
}
