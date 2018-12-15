@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/serviciospiura/empresaentel/listar')}}">Usuarios</a></li>
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
              <h2 class="h1 display display">Editar datos de Entidad:</h2>
            </div>
            <div class="card-block">
              {!!Form::model($entidad, ['action'=>['Admininfo\EpsGrauController@update',$entidad->id],'method'=>'PUT'])!!}
              <div class="form-group">
                <label class="form-control-label" for="name"><strong>Nombre de Entidad</strong></label>
                {!!form::text('nombre', null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingrese Nombre'])!!}
            </div>
            <div class="form-group">
                <label class="form-control-label" for="direccion"><strong>Dirección:</strong></label>
                {!!form::text('direccion', null,['id'=>'direccion','class'=>'form-control','placeholder'=>'Ingrese direccion'])!!}
              </div>
              <div class="form-group">
                <label class="form-control-label" for="telefono"><strong>Teléfono:</strong></label>
                {!!form::text('telefono',null,['id'=>'telefono','class'=>'form-control','placeholder'=>'teléfono'])!!}
              </div>
              <div class="form-group">
                <label class="form-control-label" for="password"><strong>Correo:</strong></label>
                {!!form::text('correo',null,['id'=>'correo','class'=>'form-control','placeholder'=>'Coorreo'])!!}
              </div>
              <div class="form-group">
                <label class="form-control-label" for="password"><strong>Horario:</strong></label>
                {!!form::text('horario',null,['id'=>'horario','class'=>'form-control','placeholder'=>'Correo'])!!}
              </div>
              <div class="form-group">
                <label class="form-control-label" for="password"><strong>Página web:</strong></label>
                {!!form::text('webentidad',null,['id'=>'horario','class'=>'form-control','placeholder'=>'web'])!!}
                </div>
              <div class="form-group">
              {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span class="glyphicon glyphicon-floppy-disk">Guardar</span>',
                'class'=>'btn btn-success ion-ios-checkmark-outline btn-sm'])!!}
                <a href="{{url('/serviciospiura/empresaentel/listar')}}" class="btn btn-primary ion-android-cancel btn-sm"> Cancelar</a>
              </div>
              {!!Form::close()!!}
            </div>        
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection