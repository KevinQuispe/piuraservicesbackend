<?php

namespace App\Http\Controllers\Admininfo\infoclaro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Consultas\EntidadEmpresa;
use App\Models\Consultas\InfoTramites;
use App\Models\Consultas\InfoReclamos;
use DB;
use Session;
class ClaroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $empresa = \DB::table('entidadempresa')->where('id', '4')->get();
         return view('serviciospiura.empresaclaro.inforeferencial.listaclaro',compact('empresa'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
        return view('serviciospiura.empresaclaro.inforeferencial.create');
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
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'horario' => 'required',
            'webentidad' => 'required',            
        ]);
    
        EntidadEmpresa::create($request->all());
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Admininfo\infoclaro\ClaroController@index');
      
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
        $empresa = \DB::table('entidadempresa')->where('id','4')->first();
        return view('serviciospiura.empresaclaro.inforeferencial.show',compact('empresa'));
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
        $entidad = EntidadEmpresa::FindOrFail($id);
        return View('serviciospiura.empresaclaro.inforeferencial.editentidad',compact('entidad'));
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
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'horario' => 'required',
            'webentidad' => 'required',
        ]);


        $entidad = EntidadEmpresa::find($id);
        $entidad->fill($request->all());
        $entidad->save();
        Session::flash('save','Se ha creado correctamente');
        return redirect()->action('Admininfo\infoclaro\ClaroController@index');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
        $entidad = EntidadEmpresa::FindOrFail($id);
        $entidad->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->action('Admininfo\infoclaro\ClaroController@index');
     }
 
     /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
       public function getinforeclamos()
       {
           # code...
           $reclamos = \DB::table('inforeclamos')->where('entidadempresa_id','4')->get();
           return view('serviciospiura.empresaclaro.inforeclamos.listainforeclamos',compact('reclamos'));
       }
        /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
       public function getinfotramites()
       {
           # code...
           try{
              $tramites = \DB::table('infotramites')->where('entidadempresa_id','4')->get();
              return view('serviciospiura.empresaclaro.infortramites.listainfotramites',compact('tramites'));
   
           } catch(Exception $e){
               return response()->json([
                   'success'=>true, 
                   'message'=>$e->getMessage()
               ]);
           }
       }
 }
 