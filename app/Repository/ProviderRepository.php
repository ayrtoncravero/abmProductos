<?php


namespace App\Repository;


use App\Proveedor;

class ProviderRepository
{
    public function save(Proveedor $provider) {
        $provider->save();
    }

    public function allProviders() {
        return proveedor::query();
    }

    public function searchFindOrFail($id):proveedor {
        return proveedor::findOrFail($id);
    }

    public function destroy($id) {
        $provider = $this->searchFindOrFail($id);
        $provider->delete();
    }
}
