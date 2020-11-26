@extends('layoutsAdmin.app')
@section('title', 'Delivereds')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>ENTREGADOS A</h1>
                <a class="text-right" href="{{route('Todos.Create')}}">Crear nuevo</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">FECHA TOMA</th>
                        <th scope="col">FECHA ENTREGA</th>
                        <th scope="col">ESCUELA</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PAQUETE</th>
                        <th scope="col">NOTA</th>
                        <th scope="col">ESTATUS</th>
                        <th scope="col">OPCIONES</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach($todos as $todo)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $todo->FechaT }}</td>
                        <td>{{ $todo->FechaE }}</td>
                        <td>{{ $todo->Escuela }}</td>
                        <td>{{ $todo->Nombre }}</td>
                        <td>{{ $todo->Paquete }}</td>
                        <td>{{ $todo->Nota }}</td>
                        <td>{{ $todo->Estatus }}</td>
                        <td>
                            <a href="{{route('Todos.Show', $todo)}}">Detalles</a> |
                            <a href="{{route('Todos.Edit', $todo)}}">Editar</a> |
                            <a href="{{route('Todos.Delete', $todo)}}">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection