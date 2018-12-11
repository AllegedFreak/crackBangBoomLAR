<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Universe::class);

    }
}
