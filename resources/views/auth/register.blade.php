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
					<!--
<div class="form-group">
						<label class='col-md-4 control-label'>Instituição</label>
						<div class='col-md-6'>
							<input id='instituicao' class='form-control' max='45' name='instituicao' type='text'>
							<input type='radio' name='instituicao' value='' onclick='esconderCursos();' required/>Outra: 
							<input class='inputinstituicao' type='text' name='instituicao' value='' max='45'><br>
							<input type='radio' name='instituicao' value='IFRS - Campus Osorio' required onclick='mostrarCursos();' /> IFRS - Campus Osório
						</div>
					</div>
-->
<!--
<script>
function esconderCursos(){
	document.getElementById('cursosCampusOsorio').style.display = 'none';
	document.getElementById('outrocurso').style.display = 'block';
}
function mostrarCursos(){
	document.getElementById('cursosCampusOsorio').style.display = 'block';
	document.getElementById('outrocurso').style.display = 'none';
}
</script>
-->
					{!! Form::classes('instituicao', 'Instituição', '[a-zA-Z\s]+$', '45')  !!}
<!--
					<div class='form-group'>
						<label class='col-md-4 control-label'>Curso</label>
						<div class='col-md-6'>
							<div id='cursosCampusOsorio' style='display: none;'>
							<input type='radio' name='faculdade' value='Analise em Desenvolvimento de Sistemas'> Analise em Desenvolvimento de Sistemas<br>
							<input type='radio' name='faculdade' value='Tecnico em Guia de Turismo EAD'> Tecnico em Guia de Turismo<br>
							<input type='radio' name='faculdade' value='Especializacao em Educacao Basica Profissional'> Especializacao em Educacao Basica Profissional<br>
							<input type='radio' name='faculdade' value='Licenciatura em Letras Portugues/Ingles'> Licenciatura em Letras Portugues/Ingles<br>
							<input type='radio' name='faculdade' value='Licenciatura em Matematica'> Licenciatura em Matematica <br>
 							<input type='radio' name='faculdade' value='Tecnologia em Processos Gerenciais'> Tecnologia em Processos Gerenciais<br>
							<input type='radio' name='faculdade' value='Tecnico em Informatica - Integrado'> Tecnico em Informatica - Integrado<br>
							<input type='radio' name='faculdade' value='Tecnico em Administracao - Integrado'> Tecnico em Administracao - Integrado<br> 
							<input type='radio' name='faculdade' value='Tecnico em Informatica - Subsequente'> Tecnico em Informatica - Subsequente<br>
							<input type='radio' name='faculdade' value='Tecnico em Administracao - Subsequente'> Tecnico em Administracao - Subsequente<br>
							<input type='radio' name='faculdade' value='Tecnico em Guia de Turismo'> Tecnico em Guia de Turismo<br>
							<input type='radio' name='faculdade' value='Tecnico em Panificacao'> Tecnico em Panificacao
							</div>
							<input id='outrocurso' class='form-control' type='text' name='faculdade' value=''/>
						</div>
					</div>

-->					
{!! Form::classes('faculdade', 'Curso', '[a-zA-Z\s]+$', '45')  !!}


					{!! Form::enviar() !!}
				  {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

