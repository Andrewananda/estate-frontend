<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit_group extends Model
{
    public function property() {
        return $this->belongsTo(Property::class);
    }
    public function ad() {
        return $this->hasMany(Ad::class);
    }
    public function unit_category() {
        return $this->belongsTo(Unit_category::class);
    }
    public function unit_type() {
        return $this->belongsTo(Unit_type::class);
    }

    public function property_type() {
        return $this->belongsTo(Property_type::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
