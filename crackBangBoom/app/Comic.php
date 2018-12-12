<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $guarded = [];

    public function universes()
    {
        return $this->belongsToMany(Universe::class);

    }
}
