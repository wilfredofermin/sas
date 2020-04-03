<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Solicitud;

class TablaSolicitudesComponente extends Component
{

    public $solicitudes='';

    public $nombreCompleto ='';


    public function render()
    {
        $this->solicitudes = Solicitud::all();
        return view('livewire.tabla-solicitudes-componente');
    }

       
}
