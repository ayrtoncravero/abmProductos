<?php


namespace App\Repository;

use App\Category;

class CategoryRepository
{
    public function save(Category $category) {
        $category->save();
    }

    public function findAll() {
        return Category::query()->get();
    }

    public function searchFindOrFail($id):Category {
        return Category::query()->findOrFail($id);
    }

    public function destroy($id) {
        $category = $this->searchFindOrFail($id);
        $category->delete();
    }
}
