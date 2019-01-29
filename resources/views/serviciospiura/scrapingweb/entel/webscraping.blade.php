@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active">Entidad</li>
      </ul>
    </div>
  </div>
  <section class="forms">
  <div class="container-fluid">
    <header>
      <h3 class="h2 fadeIn animated text-center ion-clipboard">INFORMACIÓN DE CONSULTA ENTEL</h3>
      <hr>
    </header>
  <div class="row"> 
    <div class="col-lg-12">
    <div class="card miBorder fadeIn animated">
      <div class="card-header d-flex align-items-center">
        <h3 class="h5 display ion-paperclip fadeIn animated title">Información de Trámites EPS GRAU S.A con Web Scraping (Real Time)</h3>
      </div>
      
      <div class="card-block">
        <table class="table table-striped table-hover table-bordered" id="myTable">
          <thead class="thead-inverse">
            <tr class="bg-primary">
              <th class="text-center">#</th>
              <th>Información</th>
              <th>Link de Scrapeo</th>
              <th>Acciones</th>
            </tr>
          </thead>
              <tbody>
                <tr class="fadeIn animated">
                  <th scope="row" class="text-center">1</th>
                  <td>Informacion de tramites</td>
                  <td><a href="{{ url('serviciospiura/scraping/infoscrapingtramitesepsgrau') }}">ver informacion de tramites</a></td>                  
                  <td><a href="">comparar</a></td>
              </tr>
                  <tr class="fadeIn animated">
                  <th scope="row" class="text-center">2</th>
                  <td>Informacion de reclamos</td>
                  <td><a href="{{ url('serviciospiura/scraping/infoscrapingreclamosepsgrau') }}"> ver informacion de reclamos</a></td>                  
                  <td><a href="">comparar</a></td>
                 </tr>
                <tr>
              </tbody>
              </table>
              </div>

          
  </section>
@endsection