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
  <section class="forms">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-lg-7">
          <div class="card miBorder">
            <div class="card-header d-flex align-items-center">
              <h2 class="h1 display display">Formulario:</h2>
            </div>
            <div class="card-block">
              <p>Ingrese los datos del nuevo usuario del sistema.</p>
              {!!Form::model($usuario, ['action'=>['Consultas\UsuarioEmpresaController@update',$usuario->id],'method'=>'PUT'])!!}
              <div class="form-group">
                <label class="form-control-label" for="idCargo"><strong>Rol (*):</strong></label>
                {!!Form::select('rol_id',$roles, null,['id'=>'rol_id','name'=>'rol_id','class'=>'form-control','autofocus'])!!}
              </div>
              <div class="form-group">
                <label class="form-control-label" for="name"><strong>Nombre Usuario (*):</strong></label>
                {!!form::text('name', null,['id'=>'name','class'=>'form-control','placeholder'=>'Ingrese Nombre'])!!}
            </div>
              <div class="form-group">
                <label class="form-control-label" for="email"><strong>Email (*):</strong></label>
                {!!form::text('email', null,['id'=>'email','class'=>'form-control','placeholder'=>'Ingrese Email'])!!}
              </div>
              <div class="form-group">
                <label class="form-control-label" for="password"><strong>Contraseña (*):</strong></label>
                {!!form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Password ...'])!!}
              </div>
              <div class="form-group">
                <label class="form-control-label" for="password"><strong>Confirmar Contraseña (*):</strong></label>
                {!!form::password('password_confirmation',['id'=>'password-confirm','class'=>'form-control','placeholder'=>'Password ...'])!!}
              </div>
              <div class="form-group">
              {!!form::submit('Guardar',['name'=>'grabar','id'=>'grabar','content'=>'<span class="glyphicon glyphicon-floppy-disk">Guardar</span>',
                'class'=>'btn btn-success ion-ios-checkmark-outline btn-sm'])!!}
                <a href="{{url('/serviciospiura/usuarioempresa')}}" class="btn btn-primary ion-android-cancel btn-sm"> Cancelar</a>
              </div>
              {!!Form::close()!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection