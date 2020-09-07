<?php


namespace App\Service;


use App\Categoria;

class CategoryService
{
    private $categoryRepository;

    public function __contruct(CategoryRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    public function create(string $name, string $description)
    {
        $this->validatorName($name);

        $category = new Categoria();

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

    public function validatorName(string $name) {
        if ($name === null) {
            throw ValidationException::whithMessage([
                'name' => 'Nombre no declarado',
            ]);
        }
    }
}
