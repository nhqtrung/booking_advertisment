<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table = "categories_product";

    protected $guarded = [];

    public $timestamps = false;

    public function getProducts() {
        return $this->hasMany('App\Product', 'id', 'category_id');
    }
}
