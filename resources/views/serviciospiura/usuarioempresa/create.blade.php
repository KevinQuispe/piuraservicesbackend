@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/serviciospiura/usuarioempresa')}}">Usuarios</a></li>
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
              <h2 class="h1 display display">Registrar Usuario administrador</h2>
            </div>
            <div class="card-block">
              <p>Ingrese los datos del nuevo usuario administrador del sistema.</p>

              {!! Form::open(['action'=>'Consultas\UsuarioEmpresaController@store','method'=>'POST'])!!}
              <div class="form-group">
                <label class="form-control-label col-md-4" for="name"><strong>Nombre Usuario (*):</strong></label>
                {!!form::text('name', null,['id'=>'name','class'=>'form-control offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese Nombre'])!!}
            </div>
            <br>
              <div class="form-group">
                <label class="form-control-label col-md-4" for="email"><strong>Email (*):</strong></label>
                {!!form::text('email', null,['id'=>'email','class'=>'form-control offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Ingrese Email'])!!}
              </div>
              <br>
              <div class="form-group">
                <label class="form-control-label col-md-4 " for="rol_id"><strong>Rol (*):</strong></label>
                {!!Form::select('rol_id',$roles, null,['id'=>'rol_id','name'=>'rol_id','class'=>'form-control offset col-sm-12 col-md-6 col-lg-5','autofocus'])!!}
              </div>
              <br>
              <div class="form-group">
                <label class="form-control-label col-md-4" for="password"><strong>Contraseña (*):</strong></label>
                {!! form::password('password',['id'=>'password','class'=>'form-control  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Password ...'])!!}
              </div>
            <br>
              <div class="form-group">
                <label class="form-control-label col-md-4" for="password"><strong>Confirmar Contraseña (*):</strong></label>
                {!!form::password('password_confirmation',['id'=>'password-confirm','class'=>'form-control  offset col-sm-12 col-md-6 col-lg-5','placeholder'=>'Password ...'])!!}
              </div>
              <br>
              <div class="pull-right">
              <div class="form-group">

                {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'
                <span class="glyphicon glyphicon-floppy-disk">Guardar</span>',
                'class'=>'btn btn-success ion-ios-checkmark-outline btn-sm'])!!}
                
                <a href="{{url('/serviciospiura/usuarioempresa')}}"
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