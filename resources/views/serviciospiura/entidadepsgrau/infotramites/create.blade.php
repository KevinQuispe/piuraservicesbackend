@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/serviciospiura/entidadepsgrau/listar')}}">Entidad</a></li>
        <li class="breadcrumb-item active">Nuevo</li>
      </ul>
    </div>
  </div>
  <br/>
  <section class="form-inline">
    <div class="container-fluid">
      <div class="row col-md-12">
        <div class="offset col-md">
          <div class="card miBorder">
            <div class="card-header d-flex align-items-center bg-primary">
              <h2 class="h1 display display">Registrar Tramite</h2>
            </div>
            <div class="card-block">
              <p>Tramite documentario</p>
              {!! Form::open(['action'=>'Admininfo\infoepsgrau\TramitesController@store','method'=>'POST'])!!}
              @include('serviciospiura.mensajes.mensajes')
              <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Idempresa</strong></label>
                {!!form::select('entidadempresa_id', $empresaid,null,['class'=>'form-control'])!!}
            </div>
            </br>
            <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Nombre:</strong></label>
                {!!form::text('nombre', null,['id'=>'nombre','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'reclamos'])!!}
            </div>
            <br>
            <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Descripcion:</strong></label>
                {!!form::textarea('descripcion', null,['id'=>'descripcion','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Descripcion'])!!}
            </div>
            <br>
             
              <div class="pull-right">
              <div class="form-group">

                {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'
                <span class="glyphicon glyphicon-floppy-disk">Guardar</span>',
                'class'=>'btn btn-success ion-ios-checkmark-outline btn-sm'])!!}
                
                <a href="{{url('/serviciospiura/entidadepsgrau/tramites')}}"
                class="btn btn-primary ion-android-cancel btn-sm"> Cancelar</a>
              </div>   
              </div>
                         
              {!!Form::close()!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection