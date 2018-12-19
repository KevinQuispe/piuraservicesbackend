<?php

namespace App\Http\Controllers\Admininfo\infoepsgrau;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Consultas\EntidadEmpresa;
use App\Models\Consultas\InfoTramites;
use App\Models\Consultas\InfoReclamos;
use App\Models\Consultas\Contactos;
use DB;
use Session;

class ContactosController extends Controller
{
    public function index()
    {
        try{
            $reclamos = \DB::table('contactos')->where('entidadempresa_id','1')->get();        

            return view('serviciospiura.entidadepsgrau.infocontactos.listainfocontactos',compact('reclamos'));        
        }catch(Exceprion $e){
            return $e;
    }
}
    public function create()
    {
        $empresaid= EntidadEmpresa::where('id', '1')->pluck('nombre','id');
        return view('serviciospiura.entidadepsgrau.infocontactos.create',compact('empresaid'));
    
    }

    public function store(Request $request)
    {
       
        $this->validate($request, [
            'nombreempresa'=>'required',
            'direccion' => 'required',
            'horario' => 'required',
            'telefono' => 'required',
            'tipoatencion' => 'required',
            'entidadempresa_id'=>'required'
        ]);
    
        Contactos::create($request->all());
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Admininfo\infoepsgrau\ContactosController@index');
      
    }
    
    public function show($id)
    {
        $empresaid= EntidadEmpresa::where('id', '1')->pluck('nombre','id'); 
        $empresa = Contactos::FindOrFail($id);
        return view('serviciospiura.entidadepsgrau.infocontactos.show',compact('empresa','empresaid'));
    }

    public function edit($id)
    {
        $empresaid= EntidadEmpresa::where('id', '1')->pluck('nombre','id'); 
        $contactos = Contactos::FindOrFail($id);
        return View('serviciospiura.entidadepsgrau.infocontactos.editcontactos',compact('contactos','empresaid'));
    }  
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombreempresa'=>'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'horario' => 'required',
            'tipoatencion' => 'required',
            'entidadempresa_id'=>'required'
        ]);

        $entidad = Contactos::find($id);
        $entidad->fill($request->all());
        $entidad->save();
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Admininfo\infoepsgrau\ContactosController@index');
    }

    public function destroy($id)
    {

        $entidad = Contactos::FindOrFail($id);
        $entidad->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->action('Admininfo\infoepsgrau\ContactosController@index');
    }
   
}
   