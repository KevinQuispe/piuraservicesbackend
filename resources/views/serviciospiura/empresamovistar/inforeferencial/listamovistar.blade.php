@extends('layouts.master')
@section('title','Nueva')
@section('content')
<div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active">Entidad</li>
      </ul>
    </div>
  </div>
  <section class="forms">
  <div class="container-fluid">
    <header>
      <h3 class="h2 fadeIn animated text-center ion-clipboard">INFORMACIÓN DE CONSULTA MOVISTAR</h3>
      <hr>
    </header>

     <a href="{{url('serviciospiura/empresamovistar/reclamos')}}" class="btn btn-danger btn-sm margenInf fadeIn animated ion-plus-round"> Información de reclamos</a> &nbsp;
     <a href="{{url('serviciospiura/empresamovistar/tramites')}}" class="btn btn-warning btn-sm margenInf fadeIn animated ion-plus-round"> Información de tramites</a> &nbsp;    
     <a href="{{url('/serviciospiura/empresamovistar/contactos')}}" class="btn btn-success btn-sm margenInf fadeIn animated ion-plus-round"> Lista de contactos</a> &nbsp;         
  <div class="row"> 
    <div class="col-lg-12">
    <div class="card miBorder fadeIn animated">
      <div class="card-header d-flex align-items-center">
        <h3 class="h5 display ion-paperclip fadeIn animated title">Información Referencial: Datos generales de la empresa</h3>
      </div>
      <div class="card-block">
      <a href="{{url('/serviciospiura/empresamovistar/listar/create')}}" class="btn btn-success btn-sm margenInf fadeIn animated ion-plus-round"> Nuevo</a> &nbsp;
        <table class="table table-striped table-hover table-responsive  table-bordered" id="myTable">
          <thead class="thead-inverse">
          <tr class="bg-primary">
              <th class="text-center">#</th>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Teléfono</th>
              <th>Correo</th>
              <th>Horario</th>
              <th class="smallerCell">Webentidad</th>
              <th>Acciones</th>
            </tr>
          </thead>
                <tbody>
                @foreach ($empresa as $index=>$empresa)
                <tr class="fadeIn animated">
                  <th scope="row" class="text-center">{{$index+1}}</th>
                  <td>{{$empresa->nombre}}</td>
                  <td>{{$empresa->direccion}}</td>
                  <td>{{$empresa->telefono}}</td>
                  <td>{{$empresa->correo}}</td>
                  <td>{{$empresa->horario}}</td>
                  <td> <a href="http://www.movistar.com.pe/atencion-al-cliente" target="_blank" title="Open Web">{{$empresa->webentidad}}</a></td>
                  <td class="text-center">
                    <a href="{{action('Admininfo\infotelefonia\TelefoniaController@edit', $empresa->id)}}" class="btn btn-outline-primary btn-sm ion-edit" title="Editar">Editar</a>
                    <a href="{{action('Admininfo\infotelefonia\TelefoniaController@show', $empresa->id)}}" class="btn btn-outline-danger btn-sm ion-android-delete" title="Eliminar">Eliminar</a>
              
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