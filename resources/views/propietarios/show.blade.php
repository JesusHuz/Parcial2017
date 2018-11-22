@extends('layouts')

@section('content')
    <h1>Detalles del Propietario {{ $propietario->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <td>{{ $propietario->nombre }}</td>
        </tr>
        <tr>
            <th>Cedula</th>
            <td>{{ $propietario->cedula }}</td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td>{{ $propietario->telefono }}</td>
        </tr>
        <tr>
            <th>Correo</th>
            <td>{{ $propietario->email }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $propietario->descripcion }}</td>
        </tr>
    </table>
@endsection

