<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuleType extends Model
{
    protected $table = "rule_types";

    protected $guarded = [];

    public $timestamps = false;
}
