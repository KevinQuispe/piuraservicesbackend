<?php

namespace App\Http\Controllers\Consultas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Consultas\InfoReclamos;
use App\Models\Consultas\InfoTramites;
use DB;

class InfoReclamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $lista = InfoReclamos::all();
            return response()->json($lista);

        } 
        catch(Exception $e){
            return response()->json([
                'success'=>true, 
                'message'=>$e->getMessage()
            ]);
        }
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
        try{
            \DB::beginTransaction();
            InfoReclamos::create($request->all());
            \DB::commit();
            return response()->json([
                'success'=>true,
                'message'=>'Se registro correctamente'
            ]);
        }
        catch(Exception $e){
            \DB::rollback();
            return response()->json([
                'success'=>false,
                'message'=>$e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $lista = InfoReclamos::FindOrFail($id);
            return response()->json($lista);

        } 
        catch(Exception $e){
            return response()->json([
                'success'=>true, 
                'message'=>$e->getMessage()
            ]);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getinforeclamos($id)
     {
        try{
            $reclamos = \DB::table('inforeclamos')->where('entidadempresa_id',$id)->get();
            //$lista = InfoReclamos::find($id);
            return response()->json($reclamos);

        } 
        catch(Exception $e){
            return response()->json([
                'success'=>true, 
                'message'=>$e->getMessage()
            ]);
        }
     }
     
}