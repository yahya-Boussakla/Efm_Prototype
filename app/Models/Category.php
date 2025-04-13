<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = ['name','slug'];

    public function Product(){
        $this->BelongsTo(Product::class);
    }
}
