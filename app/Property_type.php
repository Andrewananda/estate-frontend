<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_type extends Model
{
    public function unit_group() {
        return $this->hasMany(Unit_group::class);
    }
}
