<?php

namespace App\Http\Controllers\Scraping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScrapingMovistarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // echo ("hola");
        return view('serviciospiura.scrapingweb.telefonia.webscraping');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function infoscrapingtramitesmovistar()
    {
        # code...
        return view('serviciospiura/scrapingweb/telefonia/infoscrapingtramites');
    }

    public function infoscrapingreclamosmovistar()
    {
        # code...
        return view('serviciospiura/scrapingweb/telefonia/infoscrapingreclamos');
    }
    public function infoscrapingtramitesepsgrau()
    {
        # code...
        return view('serviciospiura/scrapingweb/epsgrau/infoscrapingtramites');
    }
}
