<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use Illuminate\Http\Request;
use App\Models\clase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class EntrenadorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (auth()->user()->rol !="administrador" && auth()->user()->rol !="entrenador" && auth()->user()->rol !="Usuario")
        {
            return redirect('Inicio');
        }
        $clase= clase::all();
        $Entrenador=Entrenador::all();
        return view('modulos.Entrenador', compact ('clase','Entrenador'));
        }
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datos =request()->validate([
            'name'=>['required'],
            'id_clase'=>['required'],
            'password'=>['required', 'string','min:3'],
            'email'=>['required', 'string','email','unique:users'],
            'documento'=>['required'],
            'telefono'=>['required'],
        ]);
        Entrenador::create ([
            'name'=>$datos['name'],
            'id_clase'=>$datos['id_clase'],
            'email'=>$datos['email'],
            'documento'=>$datos['documento'],
            'telefono'=>$datos['telefono'],
            'rol'=>'entrenador',
            'password'=>Hash::make($datos['password'])
 
        ]);
        return redirect('Entrenador')->with('registrado','Si');
    }
 
    /**


     * Display the specified resource.
     *
     * @param  \App\Models\entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function show(entrenador $entrenador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function edit(entrenador $entrenador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entrenador $entrenador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    /**funcion eliminar */
    public function destroy($id)
    {
        DB::table('users')->whereId($id)->delete();
        return redirect('Entrenador');
    }

}
