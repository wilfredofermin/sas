<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Solicitud;
use App\Departamento;
use App\Puesto;
use App\Supervisor;
use App\Localidad;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Requestinput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use responseresponseIlluminate\Contracts\Routing\ResponseFactory;
use Auth;

class Solicitudes extends Component
{
    // VISTAS
    public  $modoHome;
    public  $modoNuevoIngreso;
    public  $modoEliminarIngreso;

    // INPUTS
    
    public  $documento;
    public  $tipoDocumento;
    public  $nombre;
    public  $sn;
    public  $primerApellido;
    public  $segundoApellido;
    public  $departamento;
    public  $puesto;
    public  $localidad;
    public  $supervisor;
    public  $estado;

    // FUNCIONES
    public  $BuscarPuestos;
    public  $ListDepartamentos;
    public  $ListPuestos;
    public  $ListLocalidades;
    public  $usuario;
    public  $solicitudes;
    public  $MisSolicitudes;
    public  $MisSolicitudesOpen;
    public  $MisSolicitudesCerradas;


// LOS INPUT DEL FORMULARIO
//    public $servicekit_id ,$tipoDocumento,$estado,$prioridad,$documento,$primerNombre,$segundoNombre,$primerApellido,$segundoApellido,$detalle_puestos_id;

    public function mount()
    {
        //  $this   ->    restablecer();
        // $this-> modoHome = true;
        $this   ->    ListDepartamentos = Departamento::all()->where('activo', 1);
        $this   ->    ListPuestos = Puesto::where('departamento_id',$this->departamento)->where('activo', 1)->get();  
        $this   ->    ListLocalidades = Localidad::all()->where('activo', 1);

        // USUARIO LOGEADO
        $this   ->    MisSolicitudes = Solicitud::where('registradoPor', Auth::user()->name)->count();
        $this   ->    MisSolicitudesOpen = Solicitud::where('registradoPor', Auth::user()->name)->where('estado',"Open")->count();
        $this   ->    MisSolicitudesCerradas = Solicitud::where('registradoPor', Auth::user()->name)->where('estado',"Cerrado")->count();

      

        // $count = App\Flight::where('active', 1)->count();


    }

    public function restablecer()
    {
        // $this-> modoHome = true;
        // $this-> modoNuevoIngreso = false;
        // $this-> modoEliminarIngreso = false;
        $this   ->   solicitudes                =null;
        $this   ->   docuento                   =null;
        $this   ->   nombre                     =null;
        $this   ->   sn                         =null;
        $this   ->   primerApellido             =null;
        $this   ->   segundoApellido            =[];
        $this   ->   departamento               =[];
        $this   ->   puesto                     =[];
        $this   ->   localidad                  =[];
        $this   ->   supervisor                 =null;

    }

    public function store()
    {
        # code...
        $this->restablecer();
        $this-> modoHome = false;
        $this-> modoNuevoIngreso = true;


    }
    public function volver()
    {
        # code...
        $this-> modoHome = true;
        $this-> modoNuevoIngreso = false;

    }

    public function submit()
    {
        $this->validate([
            'documento'                 => 'required|min:11|max:11',
            'nombre'                    => 'required|min:2',
            'primerApellido'            => 'required|min:2',
            'departamento'              => 'required',
            'supervisor'                => 'required|email|min:10',
            'tipoDocumento'             => 'required',
            'departamento'              => 'required',
            'puesto'                    => 'required',

        ]);

        // Execution doesn't reach here if validation fails.
        // dd($this->puesto);

        Solicitud::create([

                'servicekit_id'   => $this  ->  servicekit_id = 2021, 
                'tipoDocumento'   => $this  ->  tipoDocumento, 
                'documento'       => $this  ->  documento, 
                'nombre'          => $this  ->  nombre,
                'sn'              => $this  ->  sn,
                'primerApellido'  => $this  ->  primerApellido,
                'segundoApellido' => $this  ->  segundoApellido,
                // 'estado'          => $this  ->  estado,   
                // 'prioridad'       => $this  ->  prioridad,
                'departamento'    => $this  ->  departamento,
                'puesto'          => $this  ->  puesto,
                'localidad'       => $this  ->  localidad,
                'supervisor'      => $this  ->  supervisor,
                'registradoPor'   => $this  ->  usuario = Auth::user()->name,
                // 'user_id'         => $this  ->  usuario = Auth::user()->username,
              
        ]);

        $this-> modoHome = true;
        $this-> modoNuevoIngreso = false;
        $this-> modoEliminarIngreso = false;

        
          session()->flash('message', 'Post successfully updated.');

    }


    public function render()
    {

            $this->solicitudes= Solicitud::all();
             return view('livewire.solicitudes');

    }

    
      public function changeDepartamento(){
        
                 $this   ->    ListPuestos = Puesto::where('departamento_id',$this->departamento)->where('activo', 1)->get();   
    
    }

        public function editar($id){
        
        $this->restablecer();

        $editar = Solicitud::findOrFail($id);

        $this-> modoHome = false;
        $this-> modoNuevoIngreso = true;

        $this  ->  solicitud_id         = $id;
        $this  ->  tipoDocumento        = $editar   -> tipoDocumento;
        $this  ->  servicekit_id        = 2021;
        $this  ->  documento            = $editar   -> documento;
        $this  ->  nombre               = $editar   -> nombre;
        $this  ->  sn                   = $editar   -> sn;
        $this  ->  primerApellido       = $editar   -> primerApellido;
        $this  ->  segundoApellido      = $editar   -> segundoApellido;
        $this  ->  estado               = $editar   -> estado;
        $this  ->  prioridad            = $editar   -> prioridad;
        $this  ->  departamento         = $editar   -> departamento;
        $this  ->  puesto               = $editar   -> puesto;
        $this  ->  localidad            = $editar   -> localidad;
        $this  ->  supervisor           = $editar   -> supervisor;
        $this  ->  usuario              = Auth::user()->name;
    }


    public function changePuesto()
    {

                // foreach ($this->ListPuestos as $key) {
                //     # code..
                //     $key->supervisor_id;

                // }
                //  $this->ListSupervisores = Supervisor::where('id',$key->supervisor_id)
                //                                 ->get();
    }   
}




            // $this->solicitudes = Solicitud::where(‘name’, ‘ilike’, $searchTerm)->paginate(10);
            // $this->solicitudes = Solicitud::all()->paginate(10);
            

            //  $solicitudes  = DB::table('solicituds')->paginate(2);
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
    
               // $solicitudes = Solicitud::all()
            //    ->orderBy('created_at', 'desc')
            //    ->take(10)
            //    ->get();
