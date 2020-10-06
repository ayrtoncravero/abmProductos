<?php

namespace App\Http\Controllers;

use App\Repository\ProviderRepository;
use App\Service\ProviderService;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    /**
     * @var ProviderService
     */
    private $providerService;
    /**
     * @var ProviderRepository
     */
    private $providerRepository;

    public function __construct(ProviderService $service, ProviderRepository $repository)
    {
        $this->providerService = $service;
        $this->providerRepository = $repository;
    }

    public function createView()
    {
        return view('providers/createView');
    }

    public function create(Request $request)
    {
        $this->validateRequest($request);

        $this->providerService->create($request->input('code'), $request->input('name'), $request->input('description'));

        return redirect(route('ProvidersController@providers'));
    }

    public function providers()
    {
        return view('providers/providers', ['providers' => $this->providerRepository->allProviders()]);
    }

    public function edit(string $id)
    {
        return view('providers/edit', ['provider' => $this->providerRepository->searchFindOrFail($id)]);
    }

    public function update(string $id, Request $request)
    {
        $this->validateRequest($request);

        $this->providerService->update($id, $request->input('code'), $request->input('name'), $request->input('description'));

        return redirect(route('ProvidersController@providers'));
    }

    public function destroyView(string $id)
    {
        return view('providers/destroyView', ['provider' => $this->providerRepository->searchFindOrFail($id)]);
    }

    public function destroy(string $id)
    {
        $this->providerRepository->destroy($id);

        return redirect(route('ProvidersController@providers'));
    }

    public function validateRequest(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => '',
        ]);
    }
}
