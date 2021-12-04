<?php

namespace App\Repository;

use App\Models\Category;

class CategoryRepository
{
    public function getAll()
    {
        $categories = Category::all();
        return $categories;
    }

    public function create($request)
    {
        $data = $request->only('name');
        $category = Category::query()->create($data);
        return $category;
    }

    public function store($request)
    {
        $data = $request->only('name','request');
        Category::query()->create();
    }

    public function getByUserId($userId)
    {
        $categories = Category::where('user_id',$userId);
        return $categories;
    }

    public function getById($id)
    {
        $category = Category::findOrFail($id);
        return $category;
    }

    public function update($request, $id)
    {
        Category::query()->findOrFail($id);
        $data = $request->only('name');
        return Category::query()->where('id', '=', $id)->update($data);
    }

    public function delete($id)
    {
        $category = Category::query()->findOrFail($id);
        $category->delete();
    }
}
