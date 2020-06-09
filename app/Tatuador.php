<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tatuador extends Model
{
    protected $guarded = [];
    public function tattoos()
    {
        return $this->hasMany(Tattoo::class);
    }
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
