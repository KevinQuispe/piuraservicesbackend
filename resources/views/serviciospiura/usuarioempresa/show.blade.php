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
        <div class="offset-lg-3 col-lg-6">
          <br/>
          <div class="card miBorder">
            <div class="card-header d-flex align-items-center">
              <h2 class="h1 display display"><strong style="color:#f00">Eliminar:</strong></h2>
            </div>
            <div class="card-block">
              <p>¿Desea eliminar el usuario de empresa?.</p>
              {!!Form::open(['action'=>['Consultas\UsuarioEmpresaController@destroy',$usuarios->id],'method'=>'DELETE'])!!}
              <div class="form-group">
                <strong>{!!form::label('Rol:',null,['for'=>'rol'])!!}</strong>
                {!!$rol->nombre!!}
              </div>
              <div class="form-group">
                <strong>{!!form::label('Nombre Usuario:')!!}</strong>
                {!!$usuarios->name!!}
              </div>
              <div class="form-group">
                <strong>{!!form::label('Email:')!!}</strong>
                {!!$usuarios->email!!}
              </div>
              <!--<div class="form-group">
                <strong>{ !!form::label('Password:')!!}</strong>
                { !!$usuario->password!!}
              </div>-->
              <div class="form-group">
                <a href="{{url('/serviciospiura/usuarioempresa')}}" class="btn btn-secondary">Cancelar</a>
                {!!form::submit('Eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span class="glyphicon glyphicon-floppy-disk">Eliminar</span>','class'=>'btn
                  btn-danger'])!!}
              </div>
              {!!Form::close()!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection