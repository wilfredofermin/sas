<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Solicitud;
use App\Departamento;
use App\Puesto;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Requestinput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use responseresponseIlluminate\Contracts\Routing\ResponseFactory;
use Auth;

class Solicitudes extends Component
{

    public  $modoHome;
    public  $modoNuevoIngreso;
    public  $modoEliminarIngreso;
    public  $solicitudes;
    public  $BuscarPuestos;
    public  $cedula;
    public  $departamento;
    public  $tipoDocumento;
    public  $ListDepartamentos;
    public  $ListPuestos;
    public  $ListSupervisores;
    public  $inputPuesto;
  
   

// LOS INPUT DEL FORMULARIO
//    public $servicekit_id ,$tipoDocumento,$estado,$prioridad,$documento,$primerNombre,$segundoNombre,$primerApellido,$segundoApellido,$detalle_puestos_id;

    public function mount()
    {
        $this   ->    restablecer();
        $this   ->    ListDepartamentos = Departamento::all()->where('activo', 1);
        // $this   ->    BuscarPuestos = request()->query('BuscarPuestos', $this->BuscarPuestos);

                // $this-> ListPuestos = Puesto::all();



        //    $this->ListPuestos = Puesto::where('departamento_id',4)->select('nombre')->get();

        //     $this-> ListDepartamentos = Departamento::where('id',4)->select('nombre')->get();


    }

    public function restablecer()
    {
        // $this-> modoHome = true;
        // $this-> modoNuevoIngreso = false;
        // $this-> modoEliminarIngreso = false;

        $this   ->   BuscarPuestos  =[];
        $this   ->   solicitudes    ='';
        $this   ->   departamento   = 'SELECCIONE UN DEPARTAMENTO';
        $this   ->   ListPuestos    =[];
        $this   ->   ListDepartamentos  =[];
        $this   ->   ListSupervisores   =[];
        $this   ->   inputPuesto    ='SIN DATOS QUE MOSTRAR';
        $this   ->   tipoDocumento ="Cedula" ;

    }
    public function render()
    {
        $this   ->  solicitudes = Solicitud::all();

        // $this-> ListDepartamentos = Departamento::all();



            // 'puestos' => Puesto::where('nombre', 'like', '%'.$this->search.'%')->get(),
            // $this->BuscarPuestos = Puesto::where('departamento_id',4)
            //                                     ->select('nombre')
            //                                     ->get();
    

                return view('livewire.solicitudes');
    }

    public function store()
    {
        # code...
        $this->modoHome = false;
    }


  
  
      public function changeDepartamento()
    {
        
            // BUSCAREMOS TODO LOS PUESTOS CON EL CODIGO ID DEL DEPARTAMENTO
            $this->ListPuestos = Puesto::where('departamento_id',$this->departamento)
                                                ->select('nombre')
                                                 ->where('activo', 1)
                                                ->get();
    }


    public function changePuesto()
    {



        

       // EJEMPLO 1
            // $this->ListSupervisores = DB::table('supervisors')
            //                         ->Join('puestos', 'supervisors.id','=', 'puestos.supervisor_id')
            //                         ->select('supervisors.nombre as Encargado')
            //                         ->get();   

            //  dd($this->ListSupervisores);

            //  $posts = App\Post::has('supervisors', '>=', 3)->get();
    }



   
}


        // EJEMPLO 1
        // $this->ListPuestos = DB::table('departamentos')
        // ->Join('puestos', 'departamentos.id', '=', 'puestos.departamento_id')
        // ->select('departamentos.nombre','puestos.nombre as cargos')
        // ->get();

        // dd($this->ListPuestos)

        // dd($this->ListPuestos);

// $users = DB::table('users')
//             ->join('contacts', 'users.id', '=', 'contacts.user_id')
//             ->join('orders', 'users.id', '=', 'orders.user_id')
//             ->select('users.*', 'contacts.phone', 'orders.price')
//             ->get();

// CODIGO DE EJEMPLO

// dd( $this->ListPuestos);
//    dd($this->DepartamentoPuestos);


// $verDatosIngreso = Ingreso::orderBy('id')
//         ->with('detalleIngreso')
//         ->where('id', '=', $id)
//         ->get()
//         ->each(function ($ingreso) {
//             $ingreso->detalleIngreso->each(function ($detalle) {
//                 $detalle->servicio_id;
//                 // alguna otra acción
//             });
//         });
