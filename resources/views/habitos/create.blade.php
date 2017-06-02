
@extends('app')

@section('content')
    <div class="container">

        <h1>Novo Hábito</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => 'habitos/store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição') !!}
            {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tp_habito', 'Tipo') !!}
            {!! Form::select('tp_habito',
                array('B' => 'Bom', 'R' => 'Ruim'),
                'M',
                ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('objetivo', 'Objetivo') !!}
            {!! Form::number('objetivo', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dt_inicio_ctrl', 'Data') !!}
            {!! Form::text('dt_inicio_ctrl',
                '2017-05-18 00:00:00',
                 ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar habito', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection