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
              <h2 class="h1 display display">Registrar Contacto</h2>
            </div>
            <div class="card-block">
              <p>Nuevo contacto</p>
              {!! Form::open(['action'=>'Admininfo\infotelefonia\ContactosController@store','method'=>'POST'])!!}
              @include('serviciospiura.mensajes.mensajes')
              <div class="form-group">
                <label class="form-control-label col-md-4"><strong>Entidad</strong></label>
                {!!form::select('entidadempresa_id', $empresaid,null,['class'=>'form-control'])!!}
              </div>
              </br>
              <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Empresa:</strong></label>
                {!!form::text('nombreempresa', null,['id'=>'nombreempresa','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'empresa'])!!}
            </div>
            </br>
            <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Descripcion:</strong></label>
                {!!form::text('descripcion', null,['id'=>'descripcion','class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Agregue aqui una pequeña descripcion'])!!}
            </div>
            </br>
            <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Telefono:</strong></label>
                {!!form::number('numero', 'null',['id'=>'numero','min'=>0,'class'=>'form-control offset  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'9999999999'])!!}
            </div>
            <br>
              
              <div class="pull-right">
              <div class="form-group">

                {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'
                <span class="glyphicon glyphicon-floppy-disk">Guardar</span>',
                'class'=>'btn btn-success ion-ios-checkmark-outline btn-sm'])!!}
                <a href="{{url('/serviciospiura/empresamovistar/contactos')}}"
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