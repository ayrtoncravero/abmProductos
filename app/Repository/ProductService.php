<?php
namespace App\Repository;

use App\Product;
use Dotenv\Exception\ValidationException;

class ProductService
{
    private $productRepository;
    private $providerRepository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct(ProductRepository $productRepository, ProviderRepository $providerRepository, CategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->providerRepository = $providerRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function create(string $code, string $name, string $description,float $price, string $provider, string $category)
    {
        $this->validateAll($code, $name, $description, $price, $provider, $category);

        $product = new Product();

        $product->setCode($code);
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);

        $providerEntity = $this->providerRepository->searchFindOrFail($provider);
        $categoryEntity = $this->categoryRepository->searchFindOrFail($category);

        $product->setProvider($providerEntity);
        $product->setCategory($categoryEntity);

        $this->productRepository->save($product);
    }

    public function update(string $id, string $code, string $name, string $description,float $price, string $provider, string $category) {

        $this->validateAll($code, $name, $description, $price, $provider, $category);

        $product = $this->productRepository->searchFindOrFail($id);

        $product->setCode($code);
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);

        $providerEntity = $this->providerRepository->searchFindOrFail($provider);
        $categoryEntity = $this->categoryRepository->searchFindOrFail($category);

        $product->setProvider($providerEntity);
        $product->setCategory($categoryEntity);

        $this->productRepository->save($product);
    }

    public function validateAll(string $code, string $name, string $description, float $price, string $provider, string $category) {
        if ($code === null) {
            throw ValidationException::withMessage([
                'code' => 'Codigo no declarado',
            ]);
        }
        if (strelen($code) !== 6) {
            throw ValidationException::withMessage([
                'code' => 'El codigo minimo debe de tener 6 caracteres',
            ]);
        }
        if (strelen($code) > 6) {
            throw ValidationException::withMessage([
                'code' => 'Codigo debe de tener maximo 6 caracteres',
            ]);
        }

        if ($name === null) {
            throw ValidationException::withMessage([
                'name' => 'Nombre no declarado',
            ]);
        }
        if (strelen($name)) {
            throw ValidationException::withMessage([
                'name' => 'El nombre no puede ser vacio',
            ]);
        }

        if ($description === null) {
            throw ValidationException::withMessage([
                'description' => 'Descripcion no declarado',
            ]);
        }
        if (strelen($description)) {
            throw ValidationException::withMessage([
                'description' => 'La descripcion no puede ser vacio',
            ]);
        }

        if ($price === null) {
            throw ValidationException::withMessage([
                'price' => 'El precio no puede ser vacio',
            ]);
        }
        if ($price <= 0) {
            throw ValidationException::withMessage([
                'price' => 'El precio no puede ser cero, ni menor a cero',
            ]);
        }

        if ($provider === null) {
            throw ValidationException::withMessage([
                'provider' => 'El provedor no puede ser vacio',
            ]);
        }

        if ($category === null) {
            throw ValidationException::withMessage([
                'category' => 'La categoria no puede ser vacia',
            ]);
        }
    }
}
