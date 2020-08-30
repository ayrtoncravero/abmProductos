<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function categorys() {
        return view('categorys/categorys');
    }
    public function categorysEdit() {
        return view('categorys/categorysEdit');
    }
    public function categorysDestroy() {
        return view('categorys/categorysDestroy');
    }
    public function categorysNew() {
        return view('categorys/categorysNew');
    }
    public function categoryCreate(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'string',
        ]);

        $name = $request->input('name');
        $description = $request->input('description');

        $category = new Categoria($name, $description);

        $category->save();

        return view('categorys/categorysCreated', ['category' => $category]);
    }
}
