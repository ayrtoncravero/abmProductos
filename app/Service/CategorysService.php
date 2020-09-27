<?php

namespace App\Service;

use App\Category;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class CategorysService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    public function create(string $name, string $description)
    {
        $this->validatorName($name);

        $category = new Category();

        $category->setName($name);
        $category->setDescription($description);

        $this->categoryRepository->save($category);
    }

    public function update(string $id, string $name, string $description) {

        $this->validatorName($name);

        $category = $this->categoryRepository->searchFindOrFail($id);

        $category->setName($name);
        $category->setDescription($description);

        $this->categoryRepository->save($category);
    }

    public function destroy(string $id, CategoryRepository $repository)
    {
        $category = $this->$repository->searchFindOrFail($id);
        $category->delete();
    }

    private function validatorName(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
    }
}
