@extends('layout.form')

@section('content')

        {!! Form::open(['url'=>'cadastro','id'=>'sign-up', 'class'=>'smart']) !!}

        <h1>Cadastro
            <span>Preencha todos os campos.</span>
        </h1>

        {!! Form::text('cpf', null, ['placeholder' => 'CPF', 'pattern' => '\d{3}\.\d{3}\.\d{3}-\d{2}'])!!}

        {!! Form::text('nome', null, ['placeholder' => 'Nome', 'pattern' => '[a-zA-Z\s]+$', 'max' =>'45'])!!}

        {!! Form::text('telefone', null, ['placeholder' => 'Telefone', 'pattern' => '\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$'])!!}

        {!! Form::text('email', null, ['placeholder' => 'Email', 'max' =>'45'])!!}

        @unless($errors->isEmpty())
            <ul>
            @foreach($errors->getMessages() as $error)
                <li>{{ $error[0] }}</li>
            @endforeach
            </ul>
        @endunless

        <br><br>

        {!! Form::submit('Enviar', ['class'=>'btn']) !!}
        {!! Form::close() !!}

        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

@endsection
