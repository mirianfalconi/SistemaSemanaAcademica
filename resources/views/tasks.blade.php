@extends('layout.loginapp')
@section('content')
  <form role="form" method="POST" action="{{ url('/') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @include('helpers.macrodias')
    <button type="submit" class="btn" id="inscricao">Inscrever-se</button>
  </form>
</div>
@endsection
