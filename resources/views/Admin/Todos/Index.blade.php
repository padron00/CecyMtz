@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>TODO A</h1>
                <a class="text-right" href="#">Crear nuevo</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">FECHA TOMA</th>
                        <th scope="col">FECHA ENTREGA</th>
                        <th scope="col">ESCUELA</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DIAS ASISTENCIA</th>
                        <th scope="col">GRUPO</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">NOTA</th>
                        <th scope="col">ESTATUS</th>
                        <th scope="col">OPCIONES</th>
                    </tr>
                </thead>
               
                </table>
            </div>
        </div>
    </div>
@endsection