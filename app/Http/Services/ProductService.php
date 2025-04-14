<?php

namespace App\Http\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class ProductService
{
    public function getAllProducts(){
        return Product::all();
    }

    public function getAllCategories(){
        return Category::all();
    }

    public function create(FormRequest $data){
        $request = $data->validated();
        Product::create($request);
    }

    
}


?>
