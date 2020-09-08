<?php
namespace App\Repository;

use App\Producto;
use Dotenv\Exception\ValidationException;

class ProductService
{
    //TODO: change name to correctly name (Repository)
    private $productRespository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRespository = $productRepository;
    }

    public function create(string $code, string $name, string $description,float $price, string $provider, string $category)
    {
        //TODO: change to one only validation and validate all
        $this->validatorCode($code);
        $this->validatorName($name);
        $this->validatorDescription($description);
        $this->validatorPrice($price);
        $this->validatorProvider($provider);
        $this->validatorCategory($category);

        //TODO: search once only a this
        //Para ver que exista en la DB el provider y la category
        $product = $this->productRespository->searchFindOrFail($provider);
        $product = $this->productRespository->searchFindOrFail($category);

        $product = new Producto();

        $product->setCode($code);
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);
        //TODO: search provider and category and set in product
        $product->setProvider($provider);
        $product->setCategory($category);

        $this->productRespository->save($product);
    }

    public function update(string $id, string $code, string $name, string $description,float $price, string $provider, string $category) {

        $this->validatorName($code);
        $this->validatorName($name);
        $this->validatorName($description);
        $this->validatorName($price);
        $this->validatorName($provider);
        $this->validatorName($category);

        $product = $this->productRespository->searchFindOrFail($id);

        $product->setCode($code);
        $product->setName($name);
        $product->setDescription($description);
        $product->setPrice($price);
        //TODO: search provider and category and set in product
        $product->setProvider($provider);
        $product->setCategory($category);

        $this->productRespository->save($product);
    }



    #----LAS VALIDACIONES VAN EN UNA SOLA FUNCION----
    //REVISAR TODAS LAS VALIDACIONES
    public function validatorCode(string $code) {
        if ($code === null) {
            throw ValidationException::whithMessage([
                'code' => 'Codigo no declarado',
            ]);
        }
        if (strelen($code) !== 6) {
            throw ValidationException::whithMessage([
                'code' => 'El codigo minimo debe de tener 6 caracteres',
            ]);
        }
        if (strelen($code) > 6) {
            throw ValidationException::whithMessage([
                'code' => 'Codigo debe de tener maximo 6 caracteres',
            ]);
        }
    }

    public function validatorName(string $name) {
        if ($name === null) {
            throw ValidationException::whithMessage([
                'name' => 'Nombre no declarado',
            ]);
        }
        if (strelen($name)) {
            throw ValidationException::whithMessage([
                'name' => 'El nombre no puede ser vacio',
            ]);
        }
    }

    public function validatorDescription(string $description) {
        if ($description === null) {
            throw ValidationException::whithMessage([
                'description' => 'Descripcion no declarado',
            ]);
        }
        if (strelen($description)) {
            throw ValidationException::whithMessage([
                'description' => 'La descripcion no puede ser vacio',
            ]);
        }
    }

    public function validatorPrice(float $price) {
        if ($price === null) {
            throw ValidationException::whithMessage([
                'price' => 'El precio no puede ser vacio',
            ]);
        }
        if ($price <= 0) {
            throw ValidationException::whithMessage([
                'price' => 'El precio no puede ser cero, ni menor a cero',
            ]);
        }
    }

    public function validatorProvider(string $provider) {
        if ($provider === null) {
            throw ValidationException::whithMessage([
                'provider' => 'El provedor no puede ser vacio',
            ]);
        }
    }

    public function validatorCategory(string $category) {
        if ($category === null) {
            throw ValidationException::whithMessage([
                'category' => 'La categoria no puede ser vacia',
            ]);
        }
    }
}
