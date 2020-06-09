<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $guarded = [];
    public function tatuador()
    {
        return $this->belongsTo(Tatuador::class);
    }
}
