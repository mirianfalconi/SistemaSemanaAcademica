@extends('layout.loginapp')
@section('content')

  <form role="form" method="POST" action="{{ url('/') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @include('helpers.macrodias')
    <button type="submit" class="btn" id="inscricao" disabled="true">Confirmar Inscrição</button>
  </form>

  <script type="text/javascript" src="{{ asset('js/cronograma.js') }}"></script>
  <img class="finger" src="img/finger.ico">

</div>

  <script>

  $('.todo').click(function(){
    $('.finger').addClass('none');

  });

  </script>

@endsection
