@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active">Compare Información </li>
      </ul>
    </div>
  </div>
  <section class="forms">
  <div class="container-fluid">
    <header>
      <h3 class="h2 fadeIn animated text-center ion-clipboard">COMPARE INFORMACIÓN CON BASE DE DATOS</h3>
      <hr>
    </header>
  <div class="row"> 
    <div class="col-lg-12">
    <div class="card miBorder fadeIn animated">
      <div class="card-header d-flex align-items-center">
        <h3 class="h5 display ion-paperclip fadeIn animated title">Información de Trámites EPS Grau con Web Scraping (Real Time)</h3>          
      </div>
      
      <div class="card-block">
        <table class="table table-striped table-hover table-bordered" id="myTable">
          <thead class="thead-inverse">
            <tr>
              <th class="text-center">#</th>
              <th>Nombre Trámite</th>
              <th>Descripcion</th>
              <th>Acciones</th>
            </tr>
          </thead>
              <tbody>
              <tr class="fadeIn animated">
              <th scope="row" class="text-center">#</th>
              <td>Enosa S.A.</td>
              <td>Nombre2</td>
              <td class="text-center">
              <a href="{{url('/serviciospiura/entidadepsgrau/scraping')}}" class="btn btn-info pull btn-sm margenInf fadeIn animated ion-plus-round">Volver</a> &nbsp;     
            
            </td>

            </tr>
            
             </tbody>
            </table>
         </div>
    
    <header>
      <h3 class="h5 fadeIn animated text-left ion-clipboard">Comparare y actualize información con la base de datos del Sistema</h3>
      <hr>
    
    </header>
        <div class="card-block">
        <table class="table table-striped table-hover table-bordered" id="myTable">
          <thead class="thead-inverse">
            <tr>
              <th class="text-center">#</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Acciones</th>
            </tr>
          </thead>
                <tbody>
                @foreach ($tramites as $index=>$tramites)
                <tr class="fadeIn animated">
                  <th scope="row" class="text-center">{{$index+1}}</th>
                  <td>{{$tramites->nombre}}</td>
                  <td>{{$tramites->descripcion}}</td>
                  <td class="text-center"> 
                  <a href="{{action('Admininfo\WebScrapingController@edit'" class="btn btn-warning btn-sm margenInf fadeIn animated ion-plus-round" title="Editar">Editar</a>
                  </td>
                </tr>
             @endforeach
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>  
    </div>
  </section>
@endsection