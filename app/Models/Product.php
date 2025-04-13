<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filable = ['name','price','category_id','user_id'];

    public function category (){
        return $this->hasMany(Category::class);
    }
}



