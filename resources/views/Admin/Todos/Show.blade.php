@extends('layoutsAdmin.app')
@section('title', 'Todo'. $todo->Nombre)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Detalles</h1>
            </div>
        </div>
        <div class="row">
                <div class="card col-lg-12">
                    <ul class="list-group list-group-flush">
                        <h3 class="card-title text-center"><strong>{{ $todo->Nombre}}</strong></h3>
                    </ul>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p><strong>Fecha Toma: </strong>{{ $todo->FechaT }} </p>
                            <p><strong>Fecha Entrega: </strong>{{ $todo->FechaE}}</p>
                        </li>
                        <li class="list-group-item">
                            <p><strong>Escuela: </strong>{{ $todo->Escuela }}</p>
                            <p><strong>Días Asistencia: </strong>{{ $todo->DiasA }}</p>
                            <p><strong>Grupo: </strong>{{ $todo->Grupo }}</p>
                        </li>
                        <li class="list-group-item"><b>Paquete: </b> {{ $todo->Paquete }}</li>
                        <li class="list-group-item"><b>Nota: </b> {{ $todo->Nota }}</li>
                        <li class="list-group-item"><b>Estatus: </b> {{ $todo->Estatus }}</li>
                        </li>
                        
                        <li class="list-group-item"><b>Creado: </b>{{ $todo->created_at }} <strong>|</strong> <b>Actualizado: </b>{{ $todo->updated_at }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('Todos.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Regresar</a>
                        <a href="{{route('Todos.Edit', $todo)}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Editar</a>
                        <a href="{{route('Todos.Delete', $todo)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection