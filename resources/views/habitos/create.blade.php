
@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Hábito</h1>

        {!! Form::open() !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição') !!}
            {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection