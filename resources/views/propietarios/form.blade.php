
<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
    {!! Form::label('nombre', 'Nombre') !!}

    {!! Form::text('nombre',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('nombre'))
        <span class="help-block">
            <strong>{{ $errors->first('nombre') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
    {!! Form::label('cedula', 'Cedula') !!}

    {!! Form::number('cedula',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('cedula'))
        <span class="help-block">
            <strong>{{ $errors->first('cedula') }}</strong>
        </span>
    @endif
</div> 


<div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
    {!! Form::label('descripcion', 'Descripción:') !!}

    {!! Form::textarea('descripcion',
        null,
        [
            'required',
            'placeholder' => 'Descripción',
            'autocomplete' => 'off',
            'maxlength' => 1000,
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('descripcion'))
        <span class="help-block">
            <strong>{{ $errors->first('descripcion') }}</strong>
        </span>
    @endif
</div> 

<div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
    {!! Form::label('telefono', 'Telefono') !!}

    {!! Form::number('telefono',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('telefono'))
        <span class="help-block">
            <strong>{{ $errors->first('telefono') }}</strong>
        </span>
    @endif
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email') !!}

    {!! Form::email('email',
        null,
        [
            'required',
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>

<!-- ------------------------------------------------------------------------------------- -->
