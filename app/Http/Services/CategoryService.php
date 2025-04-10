<?php

namespace App\Http\Services;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryService
{
    public function getAllCategories(){
        return Category::all();
    }

    public function create(FormRequest $request){
        $data = $request->validated();
        Category::create($data);
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
    }

    public function find($id){
        return Category::find($id);
    }

    public function update(FormRequest $request,$id){
        $data = $request->validated();
        $category = $this->find($id);
        $category->update($data);
    }
}

?>
