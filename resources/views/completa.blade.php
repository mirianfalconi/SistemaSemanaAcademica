@extends('layout.loginapp')
@section('content')
	<div style="text-align:center">
		<span><strong>Atividade: </strong>{{$curso->atividade}}<span><br/>
		<span><strong>Palestrante: </strong>{{$curso->palestrante}}<span><br/>
		<span><strong>Data: </strong>{{$curso->data}}<span>
		<span><strong>Início: </strong>{{$curso->inicio}}<span>
		<span><strong>Fim: </strong>{{$curso->fim}}<span>
	<hr/>
	<h3>Lista Completa</h3>
	<br/>
	
	<table>
		<tr>
			<th></th>
			<th><strong>Nome</strong></th>
			<th><strong>CPF</strong></th>
			<th><strong>Email</strong></th>
			<th><strong>Telefone</strong></th>
			<th><strong>Curso</strong></th>
			<th><strong>Instituição</strong></th>
		</tr>
		@foreach($users as $key => $user)
		<tr class="dados">
			<td class="nr">{{ $key+1 }}</td>
			<td>{{ $user->nome }}</td>
			<td>{{ $user->cpf }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->telefone }}</td>
			<td>{{ $user->curso }}</td>
			<td>{{ $user->instituicao }}</td>
		</tr>
		@endforeach
	</table>
@endsection