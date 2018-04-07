<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBooking extends Model
{
    protected $table = "products_booking";

    protected $guarded = [];

    public $timestamps = false;

    public function getProduct() {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    public function getRule() {
        return $this->belongsTo('App\Rule', 'rule_id', 'id');
    }

    public function getStaffManagement() {
        return $this->belongsTo('App\User', 'staff_management', 'id');
    }
}
