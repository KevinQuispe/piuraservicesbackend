@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-3">
            <div class="panel panel-primary text-center">
                <p><strong><h1>Bienvenido</h1></strong></p>
                <div class="panel-heading"><strong>Sistema de administración de información de consulta de los servicios Básicos en Piura</strong>
                    <br/>
                    <br>
                    <ul class="">
                       <strong>Servicio de Luz-Enosa,</strong>
                        <strong>Servicio de Agua-EPS GRAU SA,</strong>
                        <strong>Servicio de Telefonia</strong>
                    </ul>
                    
                
                </div>
                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection
