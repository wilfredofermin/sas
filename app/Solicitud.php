<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
