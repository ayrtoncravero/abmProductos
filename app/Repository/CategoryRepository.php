<?php


namespace App\Repository;


use App\Categoria;

class CategoryRepository
{
    public function save(Categoria $category) {
        $category->save();
    }

    public function allCategory() {
        return Categoria::query();
    }

    public function searchFindOrFail($id):Categoria {
        return Categoria::findOrFail($id);
    }

    public function destroy($id) {
        $category = $this->searchFindOrFail($id);
        $category->delete();
    }
}
