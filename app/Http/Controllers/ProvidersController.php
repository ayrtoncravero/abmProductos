<?php

namespace App\Http\Controllers;

use App\Proveedor;
use App\Repository\ProductService;
use App\Repository\ProviderRepository;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use function GuzzleHttp\Psr7\str;

class ProvidersController extends Controller
{
    public function providersNew() {
        return view('providers/providersNew');
    }

    public function providersCreate(Request $request, ProductService $service) {

        $this->validateRequest($request);

        $service->create($request->input('code'), $request->input('name'), $request->input('description'));

        return redirect(route('ProviderController@providers'));


        //$code = $request->input('code');
        //$name = $request->input('name');
        //$description = $request->input('description');

        //$providers = new Proveedor();

        //$providers->setCode($code);
        //$providers->setName($name);
        //$providers->setDescription($description);

        //$providers->save();

        //return view('providers/providerCreated', ['providers' => $providers]);
    }

    public function providers(ProviderRepository $providerRepository) {
        return view('providers', ['providers' => $providerRepository->allProviders()]);
    }

    public function edit(string $id, ProviderRepository $repository) {

        return view('edit', ['provider' => $repository->searchFindOrFail($id)]);

        //$this->validateRequest($request);

        //$code = $request->input('code');

        //$provider = Proveedor::query()->where('code', '=', $code)->first();
        //if (isset($provider) && $provider->getId() !== (int)$id) {
        //    return redirect()->back()->withErrors(['code' => 'the code has already been taken']);
        //}

        //$code = $request->input('code');
        //$name = $request->input('name');
        //$description = $request->input('description');

        //$providerEdit = Proveedor::find($id);

        //$providerEdit->setCode($code);
        //$providerEdit->setName($name);
        //$providerEdit->setDescription($description);

        //$providerEdit->save();

        //return redirect(route('ProviderConreoller@provider'));
    }

    public function update(string $id, Request $request, ProductService $service){

        $this->validateRequest($request);

        $service->update($id, $request->input('code'), $request->input('nae'), $request->input('description'));

        return redirect(route('ProvidersController@providers'));
    }

    public function destroyView(string $id, ProviderRepository $repository) {
        return view('providers/destroyView', ['provider' => $repository->searchFindOrFail($id)]);
    }

    public function destroy(string $id, ProviderRepository $repository) {

        $repository->destroy($id);

        return redirect(route('ProductController@provider'));

        //$provider = Proveedor::find($id);
        //$provider->delete();
        //return view('providers/provider');
    }

    public function validateRequest(Request $request) {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => '',
        ]);
    }
}
