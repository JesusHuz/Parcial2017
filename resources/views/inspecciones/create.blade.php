@extends('layouts.app')

@section('content')
    
    <h1>Inspecciones Nuevas</h1>

    {!! Form::model(
        $inspeccion = new \App\Inspeccion,
        [
            'route' => 'inspecciones.store',
        ]
    )!!}

    @include('inspecciones.form') 


    {!! Form::close() !!}

@endsection