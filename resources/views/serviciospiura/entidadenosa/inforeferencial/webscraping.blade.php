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
      <h3 class="h2 fadeIn animated text-center ion-clipboard">INFORMACIÓN DE CONSULTA ENOSA</h3>
      <hr>
    </header>
  <div class="row"> 
    <div class="col-lg-12">
    <div class="card miBorder fadeIn animated">
        <div class="card-header d-flex align-items-center">
            <h3 class="h5 display ion-paperclip fadeIn animated title">Información Referencial: Datos generales de la empresa</h3>
        </div>
      <div class="card-block">
        <table class="table table-striped table-hover table-bordered" id="myTable">
        
          <thead class="thead-inverse">
            <tr>
              <th class="text-center">#</th>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Teléfono</th>
              <th>Correo</th>
              <th>Horario de atención</th>
              <th>Webentidad</th>
              <th>Acciones</th>
            </tr>
          </thead>
                <tbody>
                <tr class="fadeIn animated">
                  <th scope="row" class="text-center">#</th>
                  <td>Enosa S.A.</td>
                  <td>Nombre2</td>
                  <td>Nombre3</td>
                  <td>Nombre4</td>
                  <td>Nombre5</td>
                  <td> <a href="http://www.enosa.com/" target="_blank" title="Open Web"></a>Nombre6</td>
                  <td class="text-center">
                  <a href="" class="btn btn-success btn-sm margenInf fadeIn animated ion-plus-round" title="Editar">Enviar</a>
                  </td>
                </tr>
                </tbody>
              </table>
       </div>
     </div>
     <div>
   
     <div class="card-block">
        <table class="table table-striped table-hover table-bordered" id="myTable">

          <thead class="thead-inverse">
            <tr>
              <th class="text-center">#</th>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Teléfono</th>
              <th>Correo</th>
              <th>Horario de atención</th>
              <th>Webentidad</th>
              <th>Acciones</th>
            </tr>
          </thead>
                <tbody>
                <tr class="fadeIn animated">
                  <th scope="row" class="text-center">#</th>
                  <td>Enosa S.A.</td>
                  <td>Nombre2</td>
                  <td>Nombre3</td>
                  <td>Nombre4</td>
                  <td>Nombre5</td>
                  <td> <a href="http://www.movistar.com.pe/" target="_blank" title="Open Web"></a>Nombre6</td>
                  <td class="text-center">
                    <a href="" class="btn btn-success btn-sm margenInf fadeIn animated ion-plus-round" title="Editar">Guardar</a>
                  </td>
                </tr>
                </tbody>
              </table>
              </div>
    </div>
        
  </div>

    </div>

  </section>
@endsection