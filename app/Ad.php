<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function unit_group() {
        return $this->belongsTo(Unit_group::class);
    }
}
