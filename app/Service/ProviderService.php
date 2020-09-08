<?php


namespace App\Service;


use App\Repository\ProviderRepository;
use Dotenv\Exception\ValidationException;
use NunoMaduro\Collision\Provider;

class ProviderService
{
    private $providerRepository;

    //TODO: change name to correctly name (__construct)
    public function __contruct(ProviderRepository $providerRepository) {
        $this->providerRepository = $providerRepository;
    }

    public function create(string $code, string $name, string $description)
    {
        $this->validatorCode($code);
        $this->validatorName($name);

        $provider = new Provider();

        $provider->setCode($code);
        $provider->setName($name);
        $provider->setDescription($description);

        $this->productRespository->save($provider);
    }

    public function update(string $id, string $code, string $name, string $description) {

        $this->validatorName($code);
        $this->validatorName($name);

        $provider = $this->providerRepository->searchFindOrFail($id);

        $provider->setCode($code);
        $provider->setName($name);
        $provider->setDescription($description);

        $this->productRespository->save($provider);
    }

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
                'code' => 'Nombre no declarado',
            ]);
        }
    }
}
