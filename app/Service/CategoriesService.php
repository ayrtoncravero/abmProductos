<?php

namespace App\Service;

use App\Category;
use App\Repository\CategoryRepository;
use Illuminate\Validation\ValidationException;

class CategoriesService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    public function create(string $name, ?string $description)
    {
        $this->validatorName($name);

        $category = new Category();

        $category->setName($name);
        $category->setDescription($description);

        $this->categoryRepository->save($category);
    }

    public function update(string $id, string $name, ?string $description) {

        $this->validatorName($name);

        $category = $this->categoryRepository->searchFindOrFail($id);

        $category->setName($name);
        $category->setDescription($description);

        $this->categoryRepository->save($category);
    }

    public function destroy(string $id)
    {
        $category = $this->categoryRepository->searchFindOrFail($id);

        $category->delete();
    }

    public function validatorName(string $name) {
        if($name == null){
            throw ValidationException::withMessages([
                'name' => 'Nombre no declarado',
            ]);
        }
    }
}
