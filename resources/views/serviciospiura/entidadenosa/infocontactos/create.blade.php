@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/serviciospiura/entidadenosa/listar')}}">Entidad</a></li>
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
              <h2 class="h1 display display">Registrar Contacto</h2>
            </div>
            <div class="card-block">
              <p>Nuevo contacto</p>
              {!! Form::open(['action'=>'Admininfo\infoenosa\ContactosController@store','method'=>'POST'])!!}
              @include('serviciospiura.mensajes.mensajes')
              <div class="form-group">
              <label class="form-control-label col-md-4"><strong>idEntidad</strong></label>
              {!!form::select('entidadempresa_id', $empresaid,null,['class'=>'form-control'])!!}
            </div>
            </br>
            <div class="form-group">
              <label class="form-control-label col-md-4" for="name"><strong>Empresa:</strong></label>
              {!!form::text('nombreempresa',null, ['id'=>'nombreempresa','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese nombre de la empresa'])!!}
          </div>
          </br>
          <div class="form-group">
              <label class="form-control-label col-md-4" for="name"><strong>Dirección:</strong></label>
              {!!form::text('direccion',null,['id'=>'direccion','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese dirección'])!!}
          </div>
          </br>
          <div class="form-group">
              <label class="form-control-label col-md-4" for="name"><strong>Telefono:</strong></label>
              {!!form::text('telefono',null,['id'=>'telefono','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese numero telefonico'])!!}
          </div>
          <br>
          <div class="form-group">
              <label class="form-control-label col-md-4" for="name"><strong>Horario:</strong></label>
              {!!form::text('horario',null,['id'=>'horario','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese horario de atención'])!!}
          </div>
          <br>
          <div class="form-group">
              <label class="form-control-label col-md-4" for="name"><strong>Tipo de atención:</strong></label>
              {!!form::text('tipoatencion', null,['id'=>'tipoatencion','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese tipo de atención'])!!}
          </div>
          <br>
              <div class="pull-right">
              <div class="form-group">
                {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'
                <span class="glyphicon glyphicon-floppy-disk">Guardar</span>',
                'class'=>'btn btn-success ion-ios-checkmark-outline btn-sm'])!!}
                <a href="{{url('/serviciospiura/entidadenosa/contactos')}}"
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