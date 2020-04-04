<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
     public function puestos()
    {
        return $this->hasMany(puesto::class);
    }
}
