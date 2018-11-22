@extends('layouts.app')

@section('content')
    
    <h1>Propietario Nuevo</h1>

    {!! Form::model(
        $propietario = new \App\Propietario,
        [
            'route' => 'propietarios.store',
        ]
    )!!}

    @include('propietarios.form') 


    {!! Form::close() !!}

@endsection