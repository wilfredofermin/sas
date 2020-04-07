<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
      protected $fillable = [
     
          'servicekit_id','tipoDocumento' ,'documento','nombre','sn','primerApellido','segundoApellido','departamento','puesto','localidad','supervisor','registradoPor','estado','prioridad',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
