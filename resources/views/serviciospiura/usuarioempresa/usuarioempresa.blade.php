@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active">Usuarios</li>
      </ul>
    </div>
  </div>

  <section class="forms">
    <div class="container-fluid">
      <header>
        <h1 class="h2 fadeIn animated text-center ion-clipboard">Usuarios del Sistema</h1>
      </header>
      @include('serviciospiura.mensajes.mensajes')
      <a href="{{url('/serviciospiura/usuarioempresa/create')}}" class="btn btn-success btn-sm margenInf fadeIn animated ion-plus-round"> Nuevo</a> &nbsp;
    
      <div class="row">
        <div class="col-lg-12">
          <div class="card miBorder fadeIn animated">
            <div class="card-header d-flex align-items-center">
                <h5 class="h5 display ion-paperclip fadeIn animated title"> Historial:</h5>
            </div>
            <div class="card-block">
              <table class="table table-striped table-hover table-bordered" id="myTable">

                <thead class="thead-inverse">
                  <tr>
                    <th class="text-center">#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Admin Empresa</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($usuario as $index=>$usuarios)
                    <tr class="fadeIn animated">
                      <th scope="row" class="text-center">{{$index+1}}</th>
                      <td>{{$usuarios->name}}</td>
                      <td>{{$usuarios->email}}</td>
                      <td>{{$usuarios->nombre}}</td>
                      <td class="text-center">
                        <a href="{{action('Consultas\UsuarioEmpresaController@edit', $usuarios->id)}}" class="btn btn-outline-primary btn-sm ion-edit" title="Editar">Editar</a>
                        <a href="{{action('Consultas\UsuarioEmpresaController@show', $usuarios->id)}}" class="btn btn-outline-danger btn-sm ion-android-delete" title="Eliminar">Eliminar</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection