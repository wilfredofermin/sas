<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departamento;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

        // BUSCAREMOS TODO LOS DEPARTAMENTO CON EL CODIGO x CON PUESTOS ASIGNADOS
        // $dept = Departamento::find(4);

        // $puestos = $dept->puestos;
 
        // dd($puestos);


      
    }
}
