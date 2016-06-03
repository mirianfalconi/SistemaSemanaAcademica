@extends('layout.loginapp')
@section('content')
	<div style="text-align:center">
		<span><strong>Atividade: </strong>{{$curso->atividade}}<span><br/>
		<span><strong>Palestrante: </strong>{{$curso->palestrante}}<span><br/>
		<span><strong>Data: </strong>{{$curso->data}}<span>
		<span><strong>Início: </strong>{{$curso->inicio}}<span>
		<span><strong>Fim: </strong>{{$curso->fim}}<span>
	<hr/>
	<h3>Lista de Presença</h3>
	<br/>
	
	<table>
		<tr>
			<th></th>
			<th><strong>Nome</strong></th>
			<th><strong>Assinatura</strong></th>
		</tr>
		@foreach($nomes as $key => $nome)
		<tr>
			<td class="nr">{{ $key+1 }}</td>
			<td class="td">{{ $nome->nome }}</td>
			<td>&nbsp;</td>
		</tr>
		@endforeach
	</table>
@endsection