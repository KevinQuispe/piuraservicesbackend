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
      <h3 class="h2 fadeIn animated text-center ion-clipboard">INFORMACIÓN DE CONSULTA MOVISTAR</h3>
      <hr>
    </header>
  <div class="row"> 
    <div class="col-lg-12">
    <div class="card miBorder fadeIn animated">
      <div class="card-header d-flex align-items-center">
        <h3 class="h5 display ion-paperclip fadeIn animated title">Información de Trámites movistar con Web Scraping (Real Time)</h3>
      </div>
      
      <div class="card-block">
        <table class="table table-striped table-hover table-bordered" id="myTable">
          <thead class="thead-inverse">
            <tr>
              <th class="text-center">#</th>
              <th>Nombre de Tramite</th>
              <th>Descripcion</th>
              <th>Acciones</th>
            </tr>
          </thead>
              <tbody>
                <tr class="fadeIn animated">
                  <th scope="row" class="text-center">1</th>
                  <td>enoainfo</td>
                  <td>Nombre2</td>
                  <td class="text-center">
                  <a href="" class="btn btn-success btn-sm margenInf fadeIn animated ion-plus-round" title="Copiar">Copiar</a>
                  <a href="{{url('serviciospiura/scraping/epsgrau')}}" class="btn btn-warning btn-sm margenInf fadeIn animated ion-plus-round" title="Actualizar">Actualizar DB</a>
                  </td>
                </tr>
                </tbody>
              </table>
              </div>
  </section>
@endsection