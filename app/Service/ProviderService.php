<?php

namespace App\Service;

use App\Provider;
use App\Repository\ProviderRepository;
use Illuminate\Validation\ValidationException;

class ProviderService
{
    private $providerRepository;

    public function __construct(ProviderRepository $providerRepository) {
        $this->providerRepository = $providerRepository;
    }

    public function create(string $code, string $name, string $description)
    {
        $this->validator($code, $name);

        $provider = new Provider();

        $provider->setCode($code);
        $provider->setName($name);
        $provider->setDescription($description);

        $this->providerRepository->save($provider);
    }

    public function update(string $id, string $code, string $name, string $description) {

        $this->validator($code, $name);

        $provider = $this->providerRepository->searchFindOrFail($id);

        $provider->setCode($code);
        $provider->setName($name);
        $provider->setDescription($description);

        $this->providerRepository->save($provider);
    }

    public function validator(string $code, string $name) {
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
                'code' => 'Nombre no declarado',
            ]);
        }
    }
}
