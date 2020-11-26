@extends('layoutsAdmin.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Eliminar</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('Todos.Destroy', $todo)}}" method="POST">
                @csrf
                @method('delete')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="FechaT">Fecha Toma</label>
                        <input class="form-control" type="text" name="FechaT" id="FechaT" value="{{ $todo->FechaT }}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="FechaE">Fecha Entrega</label>
                        <input class="form-control" type="text" name="FechaE" id="FechaE" value="{{ $todo->FechaE }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input class="form-control" type="text" name="Nombre" id="Nombre" value="{{ $todo->Nombre }}" disabled>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Escuela">Escuela</label>
                        <input class="form-control" type="text" name="Escuela" id="Escuela" value="{{ $todo->Escuela }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="DiasA">Días Asistencia</label>
                        <input class="form-control" type="text" name="DiasA" id="DiasA" value="{{ $todo->DiasA }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Grupo">Grupo</label>
                        <input class="form-control" type="text" name="Grupo" id="Grupo" value="{{ $todo->Grupo }}" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Tel">Teléfono</label>
                        <input class="form-control" type="text" name="Tel" id="Tel" value="{{ $todo->Tel }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Paquete">Paquete</label>
                        <input class="form-control" type="text" name="Paquete" id="Paquete" value="{{ $todo->Paquete }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Estatus">Estatus</label>
                        <input class="form-control" type="text" name="Estatus" id="Estatus" value="{{ $todo->Estatus }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Nota">Nota</label>
                    <input class="form-control" type="text" name="Nota" id="Nota" value="{{ $todo->Nota }}" disabled>
                </div>

                <a href="{{route('Todos.Index')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancelar</a>
                <a href="{{route('Todos.Edit', $todo)}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Editar</a>
                <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Eliminar</>
                </form>
            </div>
        </div>
    </div>
@endsection