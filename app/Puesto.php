<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    //
    public function departament()
    {
        return $this->belongsTo(Departamento::class);
    }

     public function supervisores()
    {
        return $this->belongsTo(Supervisor::class);
    }
}

