<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Solicitud;
use App\Departamento;
use App\Puesto;
use App\Supervisor;
use App\Localidad;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Requestinput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use responseresponseIlluminate\Contracts\Routing\ResponseFactory;
use Auth;

class Solicitudes extends Component
{
    // VISTAS
    public  $modoHome;
    public  $modoNuevoIngreso;
    public  $modoEliminarIngreso;

    // INPUTS
    public  $solicitudes;
    public  $documento;
    public  $supervisor;
    public  $nombre;
    public  $primerApellido;
    public  $segundoApellido;
    public  $Sn;
    public  $departamento;
    public  $tipoDocumento;

    // FUNCIONES
    public  $BuscarPuestos;
    public  $ListDepartamentos;
    public  $ListPuestos;
    public  $ListLocalidades;
    public  $usuario;

 
  
   

// LOS INPUT DEL FORMULARIO
//    public $servicekit_id ,$tipoDocumento,$estado,$prioridad,$documento,$primerNombre,$segundoNombre,$primerApellido,$segundoApellido,$detalle_puestos_id;

    public function mount()
    {
        $this   ->    restablecer();
        $this   ->    ListDepartamentos = Departamento::all()->where('activo', 1);
        $this   ->    usurio = Auth::user();

    }

    public function restablecer()
    {
        // $this-> modoHome = true;
        // $this-> modoNuevoIngreso = false;
        // $this-> modoEliminarIngreso = false;
    
        $this   ->   ListPuestos                =[];
        $this   ->   ListLocalidades            =[];
        $this   ->   ListDepartamentos          =[];
        $this   ->   ListSupervisores           =[];
        $this   ->   tipoDocumento              ="Cedula" ;
        $this   ->   solicitudes                ='';
        $this   ->   docuento                   ="" ;
        $this   ->   nombre                     ="" ;
        $this   ->   sn                         ="" ;
        $this   ->   primerApellido             ="" ;
        $this   ->   segundoApellido            ="" ;
        $this   ->   departamento               =[];
        $this   ->   puesto                     ="" ;
        $this   ->   localidad                  ="" ;
        $this   ->   supervisor                 ="" ;

    }

    public function submit()
    {
        $this->validate([
            'documento'                 => 'required|min:11|max:11',
            'nombre'                    => 'required|min:6',
            'primerApellido'            => 'required|min:6',
            'departamento'              => 'required|min:6',
            'supervisor'                => 'required|email|min:10',
          
        ]);

        // Execution doesn't reach here if validation fails.

        Contact::create([
            'documento'                 => $this->documento,
            'nombre'                    => $this->nombre,
            'primerApellido'            => $this->primerApellido,
            'departamento'              => $this->departamento,
            'supervisor'                => $this->supervisor,

           
        ]);
    }


    public function render()
    {
        $this   ->  solicitudes = Solicitud::all();

                    return view('livewire.solicitudes');

    }

    
      public function changeDepartamento()
    {
        
            // BUSCAREMOS TODO LOS PUESTOS CON EL CODIGO ID DEL DEPARTAMENTO
            $this->ListPuestos = Puesto::where('departamento_id',$this->departamento)
                                                // ->select('nombre',)
                                                 ->where('activo', 1)
                                                ->get();

            //  SELECCIONAR TODAS LAS LOCALIDADES ACTIVAS                                   
            $this->ListLocalidades = Localidad::all()->where('activo', 1);
  
        //  dd($this->ListSupervisores);
    }


    public function changePuesto()
    {

                foreach ($this->ListPuestos as $key) {
                    # code..
                    $key->supervisor_id;

                }
                 $this->ListSupervisores = Supervisor::where('id',$key->supervisor_id)
                                                ->get();
                                               
                                                //  ->where('activo', 1->get();


        

    }



   
}





       // EJEMPLO 1
            // $this->ListSupervisores = DB::table('supervisors')
            //                         ->Join('puestos', 'supervisors.id','=', 'puestos.supervisor_id')
            //                         ->select('supervisors.nombre as Encargado')
            //                         ->get();   

            //  dd($this->ListSupervisores);

            //  $posts = App\Post::has('supervisors', '>=', 3)->get();

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


                // $data = Puesto::find(1);
                // $supervior = $data->supervisores;

                // // $post = Post::find(1);
                // // $comments = $post->comments;
                // dd($supervior);

                    // $this-> ListDepartamentos = Departamento::all();



            // 'puestos' => Puesto::where('nombre', 'like', '%'.$this->search.'%')->get(),
            // $this->BuscarPuestos = Puesto::where('departamento_id',4)
            //                                     ->select('nombre')
            //                                     ->get();
    
