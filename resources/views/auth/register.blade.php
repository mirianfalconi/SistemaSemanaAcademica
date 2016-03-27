@extends('layout.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Registre-se</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Por favor, corrija os problemas abaixo.</strong><br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(array('url' => '/auth/register', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">


					{!! Form::classes('cpf', 'CPF', '\d{3}\.\d{3}\.\d{3}-\d{2}', '15')  !!}
					{!! Form::classes('nome', 'Nome', '[a-zA-Z\s]+$', '45')  !!}
					{!! Form::classes('telefone', 'Telefone', '\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$', '15')  !!}
					{!! Form::classes('email', 'Email', null, '45')  !!}
					{!! Form::pass('password', 'Senha')  !!}
					{!! Form::pass('password_confirmation', 'Confirme a senha')  !!}

					{!! Form::enviar() !!}
				  {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
