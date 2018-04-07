<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $table = 'rules';

    protected $guarded = [];

    public $timestamps = false;

    public function getContract() {
        return $this->belongsTo('App\Contract', 'contract_id', 'id');
    }

    public function getRuleType() {
        return $this->belongsTo('App\RuleType', 'rule_type', 'id');
    }
}
