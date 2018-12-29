<?php

namespace App\Http\Controllers\Consultas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\RolEmpresa;
use Session;
class UsuarioEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::select('users.id','name','email','nombre')
        ->join('rolempresa','rolempresa.id','=','users.rol_id')->get();
        return view ('serviciospiura.usuarioempresa.usuarioempresa')->with('usuario', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // echo("hola");
        $roles = RolEmpresa::pluck('nombre','id')->prepend('Seleccione el rol empresa...');
        return view ('serviciospiura/usuarioempresa/create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'rol_id'=>'required|not_in:0',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        User::create([
            'rol_id' => $request->rol_id,
            'name' =>  $request->name,
            'email' =>  $request->email,
            'password' => bcrypt($request->password),
        ]);
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Consultas\UsuarioEmpresaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = User::FindOrFail($id);
        $rol = RolEmpresa::FindOrFail($usuarios->rol_id);
        return View('serviciospiura.usuarioempresa.show',array('usuarios'=>$usuarios,'rol'=>$rol));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = User::FindOrFail($id);
        $roles = RolEmpresa::pluck('nombre','id')->prepend('Seleccione el rol empresa...');
        return View('serviciospiura/usuarioempresa/edit', array('roles'=>$roles,'usuario'=>$usuario));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'rol_id'=>'required|not_in:0',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'required|string|min:6|confirmed',
        ]);
  
        User::where('id',$id)->update(['rol_id'=>$request->rol_id,'name'=>$request->name,
          'email'=>$request->email,'password'=>bcrypt($request->password)]);
        Session::flash('save','Se ha actualizado correctamente');      
        return redirect()->action('Consultas\UsuarioEmpresaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = User::FindOrFail($id);
        $usuarios->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->action('Consultas\UsuarioEmpresaController@index');
    }
}
