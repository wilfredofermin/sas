<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NuevoIngresoComponent extends Component
{

    public $modoHome = false;
    public $modoEliminarIngreso = false; 
    public $modoNuevoIngreso = true ;

    public function render()
    {
     
        $this->modoNuevoIngreso;
        return view('livewire.nuevo-ingreso-component');
    }

     public function store()
    {

        // VALIDACION DE LOS INPUT EN EL FORMULARIO
        $this->validate([
            'primerNombre' => 'required|min:5',
            'segundoNombre' => 'required|min:5',
            'documento' => 'required|mini:11|max:11'
            
        ]);

        // 1- CARGAR LOS DEPARTAMENTO DISPONIBLES
        // 2- BUSCAR LOS PUESTO SEGUN EL DEPARTAMENTO SELECCIONADO
        // LLENAR EL INPUT DE SOLO LECTURA -> SUPERVISOR
        // LLENAR EL INPUT DE SOLO LECTURA -> LOCALIDAD
    

    //    $this->modoHome = false;
    //    $this->modoEliminarIngreso = false; 
    //    $this->modoNuevoIngreso = true ;









        // solicitud::create([
        //     'name' => $this->name,
        //     'phone' => $this->phone
        // ]);

        // $this->resetInput();
    }
}
