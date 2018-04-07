<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = "contracts";

    protected $guarded = [];

    public $timestamps = false;

    public function getClient() {
        return $this->belongsTo('App\Client', 'client_id', 'id');
    }

    public function getStaffManagement() {
        return $this->belongsTo('App\User', 'staff_management', 'id');
    }

    public function getContractType() {
        return $this->belongsTo('App\ContractType', 'contract_type', 'id');
    }

    public function getRules() {
        return $this->hasMany('App\Rule', 'id', 'contract_id');
    }
}
