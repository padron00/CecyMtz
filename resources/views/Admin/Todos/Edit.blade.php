@extends('layoutsAdmin.app')
@section('title', 'Todos edit')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('Todos.Update', $todo)}}" method="POST">
                @csrf
                @method('put')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="FechaT">Fecha Toma</label>
                            <input class="form-control" type="text" name="FechaT" id="FechaT" value="{{ $todo->FechaT }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="FechaE">Fecha Entrega</label>
                            <input class="form-control" type="text" name="FechaE" id="FechaE" value="{{ $todo->FechaE }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{$todo->Nombre}}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Escuela">Escuela</label>
                            <input class="form-control" type="text" name="Escuela" id="Escuela" value="{{ $todo->Escuela }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="DiasA">Días Asistencia</label>
                            <input class="form-control" type="text" name="DiasA" id="DiasA" value="{{ $todo->DiasA }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Grupo">Grupo</label>
                            <input class="form-control" type="text" name="Grupo" id="Grupo" value="{{ $todo->Grupo }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Tel">Teléfono</label>
                            <input class="form-control" type="text" name="Tel" id="Tel" value="{{ $todo->Tel }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Paquete">Paquete</label>
                            <input class="form-control" type="text" name="Paquete" id="Paquete" value="{{ $todo->Paquete }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Estatus">Estatus</label>
                            <input class="form-control" type="text" name="Estatus" id="Estatus" value="{{ $todo->Estatus }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Nota">Nota</label>
                        <input class="form-control" type="text" name="Nota" id="Nota" value="{{ $todo->Nota }}">
                    </div>
                    
                    <a href="{{route('Todos.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancelar</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Editar</button>
                    <a href="#" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                </form>
            </div>
        </div>
    </div>
@endsection