<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $guarded = [];

    public $timestamps = false;

    public function getCategory() {
        return $this->belongsTo('App\CategoryProduct', 'category_id', 'id');
    }
}
