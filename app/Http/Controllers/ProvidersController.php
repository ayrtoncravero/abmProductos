<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use function GuzzleHttp\Psr7\str;

class ProvidersController extends Controller
{
    public function providers() {
        return view('providers/providers');
    }
    public function providersEdit() {
        return view('providers/providersEdit');
    }
    public function providersDestroy() {
        return view('providers/providersDestroy');
    }
    public function providersNew() {
        return view('providers/providersNew');
    }
    public function providersCreate(Request $request) {
        $request->validate([
            'code' => 'required|unique:proveedors|between:1,6|min:1|max:6',
            'name' => 'required|between:1|min:1|max:6',
            'description' => 'required',
        ]);

        $code = $request->input('code');
        $name = $request->input('name');
        $description = $request->input('description');

        $provider = new Proveedor($code, $name, $description);

        $provider->save();

        return view('providers/providerCreated', ['provider' => $provider]);
    }
}
