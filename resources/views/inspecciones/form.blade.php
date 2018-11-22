
<div class="form-group{{ $errors->has('placa') ? ' has-error' : '' }}">
    {!! Form::label('placa', 'Placa') !!}

    {!! Form::text('placa',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('placa'))
        <span class="help-block">
            <strong>{{ $errors->first('placa') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group{{ $errors->has('marca') ? ' has-error' : '' }}">
    {!! Form::label('marca', 'Marca') !!}

    {!! Form::text('marca',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('marca'))
        <span class="help-block">
            <strong>{{ $errors->first('marca') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group{{ $errors->has('modelo') ? ' has-error' : '' }}">
    {!! Form::label('modelo', 'Modelo') !!}

    {!! Form::text('modelo',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('modelo'))
        <span class="help-block">
            <strong>{{ $errors->first('modelo') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('duracion') ? ' has-error' : '' }}">
    {!! Form::label('duracion', 'Duracion') !!}

    {!! Form::text('duracion',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('duracion'))
        <span class="help-block">
            <strong>{{ $errors->first('duracion') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
    {!! Form::label('estado', 'Estado') !!}

    {!! Form::text('estado',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('estado'))
        <span class="help-block">
            <strong>{{ $errors->first('estado') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>

<!-- ------------------------------------------------------------------------------------- -->