<?php
namespace App\Repository;

use App\Product;
use Illuminate\Validation\ValidationException;
use Money\Currency;
use Money\Money;

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

    public function create(string $code, string $name, string $description,Money $price, string $provider, string $category)
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

    public function update(string $id, string $code, string $name, string $description,Money $price, string $provider, string $category) {

        $this->validateAll($code, $name, $description, $price, $provider, $category);

        $product = $this->productRepository->findOrFail($id);

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

    public function validateAll(string $code, string $name, string $description, Money $price, string $provider, string $category) {
        if ($code === null) {
            throw ValidationException::withMessages([
                'code' => 'Codigo no declarado',
            ]);
        }
        if (strlen($code) !== 6) {
            throw ValidationException::withMessages([
                'code' => 'El codigo minimo debe de tener 6 caracteres',
            ]);
        }
        if (strlen($code) > 6) {
            throw ValidationException::withMessages([
                'code' => 'Codigo debe de tener maximo 6 caracteres',
            ]);
        }

        if ($name === null) {
            throw ValidationException::withMessages([
                'name' => 'Nombre no declarado',
            ]);
        }
        if (strlen($name) <= 0) {
            throw ValidationException::withMessages([
                'name' => 'El nombre no puede ser vacio',
            ]);
        }

        if ($description === null) {
            throw ValidationException::withMessages([
                'description' => 'Descripcion no declarado',
            ]);
        }
        if (strlen($description) <= 0) {
            throw ValidationException::withMessages([
                'description' => 'La descripcion no puede ser vacio',
            ]);
        }

        if ($price->isZero()) {
            throw ValidationException::withMessages([
                'price' => 'El precio no puede ser vacio',
            ]);
        }
        if ($price->isNegative()) {
            throw ValidationException::withMessages([
                'price' => 'El precio no puede ser cero, ni menor a cero',
            ]);
        }

        if ($provider === null) {
            throw ValidationException::withMessages([
                'provider' => 'El provedor no puede ser vacio',
            ]);
        }

        if ($category === null) {
            throw ValidationException::withMessages([
                'category' => 'La categoria no puede ser vacia',
            ]);
        }
    }
}
