<?php
//funciones que puede realizar el administrador sobre las clases
namespace App\Http\Controllers;


use App\Models\clase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//retornar a la vista clase
    public function index()
    {
    if (auth()->user()->rol !="administrador" && auth()->user()->rol !="entrenador" && auth()->user()->rol !="Usuario"){
    return redirect('Inicio');
     }
    $clase= clase::all();

    return view('modulos.clase')->with('clase',$clase);
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
    //crear nueva clase
    public function store(Request $request)
    {
     clase::create([
         'clase'=> request('clase'),
         'descripcion'=> request('descripcion'),
         'dias'=> request('dias'),
         'hora'=> request('hora'),
    ]);
     return redirect ('clase');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function show(clase $clase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clase  $clase
     * @return \Illuminate\Http\Response
     */
    public function edit(clase $clase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clase  $clase
     * @return \Illuminate\Http\Response
     */
    //modificar y actualizar las clases
    public function update(Request $request)
    {
        DB::table('clase')->where('id',request('id'))->update(['clase'=>request('claseE')]);
        return redirect('clase');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clase  $clase
     * @return \Illuminate\Http\Response
     */
    //eliminar las clases
    public function destroy($id)
    {
        DB::table('clase')->whereid($id)->delete();
        return redirect('clase');
    }

}
