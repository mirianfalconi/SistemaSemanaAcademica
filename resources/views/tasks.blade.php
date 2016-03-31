@extends('layout.loginapp')
@section('content')

  <form role="form" method="POST" action="{{ url('/inscricao') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @include('helpers.macrodias')
    <button type="submit" class="btn" id="inscricao">Inscrever-se</button>
  </form>


  <img class="finger" src="img/finger.ico">

</div>
@endsection
