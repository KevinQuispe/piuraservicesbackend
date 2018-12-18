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
        <h3 class="h5 display ion-paperclip fadeIn animated title ">Lista Información de Reclamos</h3>
      </div>
      <div class="card-block">
      <a href="{{url('/serviciospiura/empresaentel/reclamos/create')}}" class="btn btn-success btn-sm margenInf fadeIn animated ion-plus-round"> Nuevo</a> &nbsp;
      <a href="{{url('/serviciospiura/empresaentel/listar')}}" class="btn btn-info pull-right btn-sm margenInf fadeIn animated ion-plus-round">Volver</a> &nbsp;
  
      <table class="table table-striped table-hover table-bordered" id="myTable">
          <thead class="thead-inverse">
            <tr>
              <th class="text-center">#</th>
              <th>Nombre de reclamo</th>
              <th>Despcripción</th>
              <th>Acciones</th>
            </tr>
          </thead>
                <tbody>
                @foreach ($reclamos as $index=>$reclamos)
                <tr class="fadeIn animated">
                  <th scope="row" class="text-center">{{$index+1}}</th>
                  <td>{{$reclamos->nombre}}</td>
                  <td>{{$reclamos->descripcion}}</td>
                  <td class="text-center">
                    <a href="{{action('Admininfo\infoentel\ReclamosController@edit', $reclamos->id)}}" class="btn btn-outline-primary btn-sm ion-edit" title="Editar">Editar</a>
                    <a href="{{action('Admininfo\infoentel\ReclamosController@show', $reclamos->id)}}" class="btn btn-outline-danger btn-sm ion-android-delete" title="Eliminar">Eliminar</a>
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