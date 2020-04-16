<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function ad() {
        return $this->hasMany(Ad::class);
    }
    public function location() {
        return $this->belongsTo(Location::class);
    }
    public function unit_group() {
        return $this->hasMany(Unit_group::class);
    }

    public function property_type() {
        return $this->belongsTo(Property_type::class);
    }
}
