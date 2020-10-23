<?php


namespace App\Repository;


use App\Provider;

class ProviderRepository
{
    public function save(Provider $provider) {
        $provider->save();
    }

    public function allProviders() {
        return Provider::query()->get();
    }

    public function searchFindOrFail($id):Provider {
        return Provider::findOrFail($id);
    }

    public function destroy($id) {
        $provider = $this->searchFindOrFail($id);
        $provider->delete();
    }
}
