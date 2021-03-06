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
  <section class="forms">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-3 col-lg-6">
          <br/>
          <div class="card miBorder">
            <div class="card-header d-flex align-items-center">
              <h2 class="h1 display display"><strong style="color:#f00">Eliminar reclamo:</strong></h2>
            </div>
            <div class="card-block">
              <p>¿Desea eliminar datos de reclamo?.</p>
              {!!Form::open(['action'=>['Admininfo\infoenosa\ReclamosController@destroy',$empresa->id],'method'=>'DELETE'])!!}
             
              <div class="form-group">
                <strong>{!!form::label('Entidad:')!!}</strong>
                {!!form::select('entidadempresa_id', $empresaid,null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                <strong>{!!form::label('Nombre:')!!}</strong>
                {!!$empresa->nombre!!}
              </div>
              <div class="form-group">
                <strong>{!!form::label('Descripción:')!!}</strong>
                {!!$empresa->descripcion!!}
              </div>
        
              <div class="form-group">
                <a href="{{url('/serviciospiura/entidadenosa/reclamos')}}" class="btn btn-secondary">Cancelar</a>
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