@extends('layouts.app')

@section('content')
    
    <h1>{{ $title }}</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Descripcion</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($propietarios as $propietario)
            <tr>             
                    <td>{{ $propietario->nombre }}</td>
                    <td>{{ $propietario->cedula }}</td>
                    <td>{{ $propietario->descripcion }}</td>
                    <td>{{ $propietario->telefono }}</td>
                    <td>{{ $propietario->email }}</td>
                <td>
                    <a href="{{ route ('propietarios.show',$propietario) }}">
                        Detalles
                    </a>
                </td>
                <td>
                    <a href="{{ route ('propietarios.edit',$propietario) }}">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text center mx-auto">
            {!! $propietarios->links() !!}       
    </div>

@endsection

