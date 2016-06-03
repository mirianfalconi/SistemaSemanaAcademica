@extends('layout.loginapp')
@section('content')
	<div style="text-align: center">
		<form role="form" method="POST" action="{{ url('/listas') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="listas"/>
			<button type="submit" class="btn">Acessar</button>
		</form>
	</div>
@endsection
