<html>
	<head>
		<title>Laravel</title>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href="{{ asset('css/grid.css') }}" rel="stylesheet">
	</head>
	<body>
		@extends('layouts.app')
	  @section('content')
	  @if (count($tasks) > 0)
	    <article>
	      <table>
	        <div class="row">
	            <div class="column column-4"> Quinta-feira </div>
	            <div class="column column-4"> Sexta-feira </div>
	            <div class="column column-4"> Sabado </div>
	            @foreach ($tasks as $task)
	              <div class="column column-4"> {{ $task->name }} </div>
	            @endforeach
	        </div>
	    </article>
	    @endif
	  @endsection
	</body>
</html>
