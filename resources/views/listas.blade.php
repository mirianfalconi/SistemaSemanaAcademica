@extends('layout.loginapp')
@section('content')
	<ul>
	@foreach($listas as $task)
		<li>{{ $task->curso }} ({{$task->data}} {{$task->inicio}}-{{$task->fim}}) <a href='{{ url("listas/chamada/$task->id") }}'>Chamada</a> <a href='{{ url("listas/completa/$task->id") }}'>Completa</a></li>
	@endforeach
	<ul>
@endsection