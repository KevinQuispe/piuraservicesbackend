@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/serviciospiura/empresaclaro/listar')}}">Entidades</a></li>
        <li class="breadcrumb-item active">Nuevo</li>
      </ul>
    </div>
  </div>
  <br/>
  <section class="forms">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-lg-7">
          <div class="card miBorder">
            <div class="card-header d-flex align-items-center">
              <h2 class="h1 display display">Editar Reclamo:</h2>
            </div>
            <div class="card-block">
              {!!Form::model($reclamos, ['action'=>['Admininfo\infoclaro\ReclamosController@update',$reclamos->id],'method'=>'PUT'])!!}
              <div class="form-group">
                <label class="form-control-label" for="name"><strong>Entidad</strong></label>
                {!!form::select('entidadempresa_id', $empresaid,null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                <label class="form-control-label" for="direccion"><strong>Nombre:</strong></label>
                {!!form::text('nombre', null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingrese Ingrese nombre del reclamo'])!!}
              </div>
              <div class="form-group">
                <label class="form-control-label" for="telefono"><strong>Descripcion:</strong></label>
                {!!form::textarea('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'Ingrese descipción'])!!}
              </div>
              <div class="pull-right">
              <div class="form-group">
              {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span class="glyphicon glyphicon-floppy-disk">Guardar</span>',
                'class'=>'btn btn-success ion-ios-checkmark-outline btn-sm'])!!}
                <a href="{{url('/serviciospiura/empresaclaro/reclamos')}}" class="btn btn-primary ion-android-cancel btn-sm"> Cancelar</a>
              </div>
              {!!Form::close()!!}
            </div>        
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection