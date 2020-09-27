<?php

namespace App\Http\Controllers;

use App\Repository\ProviderRepository;
use App\Service\ProviderService;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function providersNew() {
        return view('providers/providersNew');
    }

    public function create(Request $request, ProviderService $service) {

        $this->validateRequest($request);

        $service->create($request->input('code'), $request->input('name'), $request->input('description'));

        return redirect(route('ProviderController@providers'));
    }

    public function providers(ProviderRepository $providerRepository) {
        return view('providers/providers', ['providers' => $providerRepository->allProviders()]);
    }

    public function providersEdit(string $id, ProviderRepository $repository) {

        return view('providers/providersEdit', ['providers' => $repository->searchFindOrFail($id)]);
    }

    public function update(string $id, Request $request, ProviderService $service){

        $this->validateRequest($request);

        $service->update($id, $request->input('code'), $request->input('name'), $request->input('description'));

        return redirect(route('ProvidersController@providers'));
    }

    public function destroyView(string $id, ProviderRepository $repository) {
        return view('providers/destroyView', ['providers' => $repository->searchFindOrFail($id)]);
    }

    public function destroy(string $id, ProviderRepository $repository) {

        $repository->destroy($id);

        return redirect(route('ProductController@provider'));
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => '',
        ]);
    }
}
