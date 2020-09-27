<?php


namespace App\Repository;


use App\Category;

class CategoryRepository
{
    public function save(Category $category) {
        $category->save();
    }

    public function allCategorys() {
        return Category::query();
    }

    public function searchFindOrFail($id):Category {
        return Category::findOrFail($id);
    }

    public function destroy($id) {
        $category = $this->searchFindOrFail($id);
        $category->delete();
    }
}
