<?php

namespace App\Http\Controllers\Admininfo\infoclaro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Consultas\EntidadEmpresa;
use App\Models\Consultas\InfoTramites;
use App\Models\Consultas\InfoReclamos;
use App\Models\Consultas\Contactos;
use DB;
use Session;

class TramitesController extends Controller
{
    public function index()
    {
        $tramites = \DB::table('infotramites')->where('entidadempresa_id','4')->get();        
        return view('serviciospiura.empresaclaro.infotramites.listainfotramites',compact('tramites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresaid= EntidadEmpresa::where('id', '4')->pluck('nombre','id');
        return view('serviciospiura.empresaclaro.infotramites.create',compact('empresaid'));
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
    
        InfoTramites::create($request->all());
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Admininfo\infoclaro\TramitesController@index');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresaid= EntidadEmpresa::where('id', '4')->pluck('nombre','id');
        $tramites = InfoTramites::FindOrFail($id);
         return view('serviciospiura.empresaclaro.infotramites.show',compact('tramites','empresaid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresaid= EntidadEmpresa::where('id', '4')->pluck('nombre','id');
        $tramites = InfoTramites::FindOrFail($id);
        return View('serviciospiura.empresaclaro.infotramites.edittramites',compact('tramites','empresaid'));
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

        $entidad = InfoTramites::find($id);
        $entidad->fill($request->all());
        $entidad->save();
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Admininfo\infoclaro\TramitesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entidad = InfoTramites::FindOrFail($id);
        $entidad->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->action('Admininfo\infoclaro\TramitesController@index');
    }
}
