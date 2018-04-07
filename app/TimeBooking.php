<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeBooking extends Model
{
    protected $table = "time_booking";

    protected $guarded = [];

    public $timestamps = false;

    public function getProductBooking() {
        return $this->belongsTo('App\ProductBooking', 'product_booking_id', 'id');
    }
}
