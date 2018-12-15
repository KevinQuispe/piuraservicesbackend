@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/serviciospiura/empresaentel/listar')}}">Entidad</a></li>
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
              <h2 class="h1 display display"><strong style="color:#f00">Eliminar Entidad empresa:</strong></h2>
            </div>
            <div class="card-block">
              <p>¿Desea eliminar datos de empresa?.</p>
              {!!Form::open(['action'=>['Admininfo\infoentel\TramitesController@destroy',$tramites->id],'method'=>'DELETE'])!!}
             
              <div class="form-group">
                <strong>{!!form::label('idempresa:')!!}</strong>
                {!!form::select('entidadempresa_id', $empresaid,null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                <strong>{!!form::label('Nombre:')!!}</strong>
                {!!$tramites->nombre!!}
              </div>
              <div class="form-group">
                <strong>{!!form::label('Descripcion:')!!}</strong>
                {!!$tramites->descripcion!!}
              </div>
                  <!--<div class="form-group">
                <strong>{ !!form::label('Password:')!!}</strong>
                { !!$usuario->password!!}
              </div>-->
              <div class="form-group">
                <a href="{{url('/serviciospiura/empresaentel/tramites')}}" class="btn btn-secondary">Cancelar</a>
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