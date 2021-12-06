<?php
//funciones que puede realizar el administrador sobre la tabla de Usuarios
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //los roles de administrador y entrenador pueden acceder a la vista de Usuarios
    public function index()
    {
        if(auth()->user()->rol != 'administrador' && auth()->user()->rol != 'entrenador'){
            return redirect('Inicio');
        }
        $Usuario= DB::select('select * from users where rol= "Usuario"');
        return view('modulos.Usuario')->with('Usuario',$Usuario);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**funcion crear nuevo Usuario */
    public function create()
    {
        /**solo el administrador y el entrenador puede realizar esta accion */
        if(auth()->user()->rol != 'administrador' && auth()->user()->rol != 'entrenador'){
            return redirect('Inicio');
        }
        return view('modulos.Crear-Usuario');
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
            'documento'=>['required'],
            'telefono'=>['required'],
            'password'=>['required', 'string','min:3'],
            'email'=>['required', 'string','email','unique:users']
 
        ]);
        Usuario::create ([
            'name'=>$datos['name'],
            'id_clase'=>0,
            'email'=>$datos['email'],
            'documento'=>$datos['documento'],
            'telefono'=>$datos['telefono'],
            'rol'=>'Usuario',
            'password'=>Hash::make($datos['password'])
 
        ]);
        return redirect('Usuario')->with('Agregado','Si');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $Usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    /**funcion editar */
    public function edit(Usuario $id)
    {

        if(auth()->user()->rol != 'administrador' && auth()->user()->rol != 'entrenador'){
            return redirect('Inicio');}
     $Usuario=Usuario::find($id->id);
     return view('modulos.Editar-Usuario')->with('Usuario',$Usuario);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
    /**funcion actualizar */
    public function update(Request $request, Usuario $Usuario)
    {
        if($Usuario["email"]!= request('email') && request('passwordN')!="")
        {
            $datos=request()->validate([
                'name'=>['required'],
                'documento'=>['required'],
                'password'=>['required', 'string','min:3'],
                'email'=>['required', 'string','email','unique:users']
            ]);
            DB::table('users')->where('id',$Usuario["id"])->update(['name'=>$datos["name"],
            'email'=>$datos["email"],'documento'=>$datos["documento"],'password'=> Hash::make($datos["passwordN"])]);
 
        }else if ($Usuario["email"]!=request('email')&& request ('passwordN')==""){
            $datos=request()->validate([
                'name'=>['required'],
                'documento'=>['required'],
                'password'=>['required', 'string','min:3'],
                'email'=>['required', 'string','email','unique:users']
            ]);
            DB::table('users')->where('id',$Usuario["id"])->update(['name'=>$datos["name"],
            'email'=>$datos["email"],'documento'=>$datos["documento"],'password'=> Hash::make($datos["password"])]);
 
        }else if ($Usuario["email"]!=request('email')&& request ('passwordN')==""){
            $datos=request()->validate([
                'name'=>['required'],
                'documento'=>['required'],
                'password'=>['required', 'string','min:3'],
                'email'=>['required', 'string','email']
            ]);
            DB::table('users')->where('id',$Usuario["id"])->update(['name'=>$datos["name"],
            'email'=>$datos["email"],'documento'=>$datos["documento"],'password'=> Hash::make($datos["passwordN"])]);
    }else{
        $datos= request()->validate([
                'name'=>['required'],
                'documento'=>['required'],
                'password'=>['required', 'string','min:3'],
                'email'=>['required', 'string','email']
 
        ]);
                DB::table('users')->where('id',$Usuario["id"])->update(['name'=>$datos["name"],
                'email'=>$datos["email"],'documento'=>$datos["documento"],'password'=> Hash::make($datos["password"])]);
            }
return redirect('Usuario')->with('actualizadoU','Si');
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $Usuario
     * @return \Illuminate\Http\Response
     */
        /**funcion eliminar */
    public function destroy($id)
    {
        DB::table('users')->whereId($id)->delete();
        return redirect('Usuarios');
    }

}
