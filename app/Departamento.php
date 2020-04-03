<?php

namespace App;
use App\Puesto;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    public function puestos()
    {
        return $this->hasMany(puesto::class);
    }
}



