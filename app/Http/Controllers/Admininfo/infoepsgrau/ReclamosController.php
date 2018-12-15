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
class ReclamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamos = \DB::table('inforeclamos')->where('entidadempresa_id','1')->get();        
        return view('serviciospiura/entidadepsgrau/inforeclamos.listainforeclamos',compact('reclamos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresaid= EntidadEmpresa::where('id', '1')->pluck('nombre','id');
        return view('serviciospiura.entidadepsgrau.inforeclamos.create',compact('empresaid'));
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'entidadempresa_id'=>'required'
        ]);
    
        InfoReclamos::create($request->all());
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Admininfo\infoepsgrau\ReclamosController@index');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           // $empresa = \DB::table('entidadempresa')->where('id', '1')->first();
                  
      // $id_entidad=\DB::table('inforeclamos')->select('id')->first()->id; //get id de la empresa
      // $empresa = \DB::table('inforeclamos')->where('id',$id_entidad)->first(); //compare id de captura
      // $empresaid= EntidadEmpresa::orderBy('nombre','asc')->pluck('nombre','id'); 
      $empresaid= EntidadEmpresa::where('id', '1')->pluck('nombre','id'); 
      $empresa = InfoReclamos::FindOrFail($id);
        return view('serviciospiura.entidadepsgrau.inforeclamos.show',compact('empresa','empresaid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresaid= EntidadEmpresa::where('id', '1')->pluck('nombre','id'); 
        $reclamos = InfoReclamos::FindOrFail($id);
        return View('serviciospiura.entidadepsgrau.inforeclamos.editreclamos',compact('reclamos','empresaid'));
  
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'entidadempresa_id'=>'required',
        ]);

        $entidad = InfoReclamos::find($id);
        $entidad->fill($request->all());
        $entidad->save();
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Admininfo\infoepsgrau\ReclamosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entidad = InfoReclamos::FindOrFail($id);
        $entidad->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->action('Admininfo\infoepsgrau\ReclamosController@index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getinforeclamos()
     {
         # code...
         $reclamos = \DB::table('inforeclamos')->where('entidadempresa_id','1')->get();
         return view('serviciospiura.entidadepsgrau.inforeclamos.listainforeclamos',compact('reclamos'));
     }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
}
