@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/serviciospiura/empresamovistar/listar')}}">Entidad</a></li>
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
              <h2 class="h1 display display">Registrar Entidad Empresa</h2>
            </div>
            <div class="card-block">
              <p>Ingrese los datos de la Entidad Empresa</p>
              {!! Form::open(['action'=>'Admininfo\infotelefonia\TelefoniaController@store','method'=>'POST'])!!}
              @include('serviciospiura.mensajes.mensajes')
              <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Nombre Entidad:</strong></label>
                {!!form::text('nombre', null,['id'=>'nombre','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese Nombre empresa'])!!}
            </div>
            </br>
            <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Telefono:</strong></label>
                {!!form::text('telefono', null,['id'=>'telefono','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese'])!!}
                @if ($errors->has('telefono'))
                            <span class="invalid-feedback">
                                {{ $errors->first('telefono') }}
                            </span>
                @endif
            </div>
            <br>
              <div class="form-group">
                <label class="form-control-label col-md-4" for="email"><strong>Dirección:</strong></label>
                {!!form::text('direccion', null,['id'=>'direccion','class'=>'form-control offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese Dirección'])!!}
              </div>
              <br>
              <div class="form-group">
                <label class="form-control-label col-md-4" for="email"><strong>Correo:</strong></label>
                {!!form::text('correo', null,['id'=>'correo','class'=>'form-control offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese correo electronico'])!!}
              </div>
              <br>
              <div class="form-group">
                <label class="form-control-label col-md-4" for="email"><strong>Horario:</strong></label>
                {!!form::text('horario', null,['id'=>'horario','class'=>'form-control offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese Horario de atención'])!!}
              </div>
              <br>
              <div class="form-group">
                <label class="form-control-label col-md-4" for="email"><strong>Página web:</strong></label>
                {!!form::text('webentidad', null,['id'=>'webentidad','class'=>'form-control offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese dirección web'])!!}
              </div>
              <br>
             
              <div class="pull-right">
              <div class="form-group">

                {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'
                <span class="glyphicon glyphicon-floppy-disk">Guardar</span>',
                'class'=>'btn btn-success ion-ios-checkmark-outline btn-sm'])!!}
                <a href="{{url('/serviciospiura/empresamovistar/listar')}}"
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