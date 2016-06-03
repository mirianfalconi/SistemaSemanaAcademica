<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Semana Acadêmica</title>


	<link href="{{ asset('/css/grid.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/login.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('js/jquery.2.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>


</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">


			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<img id="logo" src="{{ asset('/img/SemanaAcademica200.png') }}">
				<h2 class="titulo"><strong>Semana Acadêmica Integrada</strong></h2>
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())

					@else
						<li class="dropdown">
							<li class="nome">{{ Auth::user()->nome }}</li>
							<li><a href="{{ url('/auth/logout') }}">Sair </a></li>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>


<div class="info">
				@if (Auth::guest())
					<p >Selecione todas as atividades que deseja participar e em seguida clique em <strong>Confirmar Inscrição</strong></p>
				@else
					<p >Inscrição realizada com sucesso. Você está inscrito nas seguintes atividades.</p>
				@endif
</div>

	@yield('content')



</body>
</html>
