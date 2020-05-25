<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tattoo extends Model
{
    protected $guarded = [];
    public function tatuador()
    {
        return $this->belongsTo(Tatuador::class);
    }
}
