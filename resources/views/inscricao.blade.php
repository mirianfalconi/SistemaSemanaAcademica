@extends('layout.app')

@section('content')

        {!! Form::open(['url'=>'cadastro','id'=>'sign-up']) !!}

        {!! Form::label('cpf', 'CPF:') !!}
        {!! Form::text('cpf', null)!!}

        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null)!!}

        {!! Form::label('telefone', 'Telefone:') !!}
        {!! Form::text('telefone', null)!!}

        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null)!!}

        @unless($errors->isEmpty())
            <ul>
            @foreach($errors->getMessages() as $error)
                <li>{{ $error[0] }}</li>
            @endforeach
            </ul>
        @endunless

        {!! Form::submit('Enviar') !!}
        {!! Form::close() !!}

        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

@endsection
