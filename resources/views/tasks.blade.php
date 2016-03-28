@extends('layout.loginapp')
@section('content')
  <form role="form" method="POST" action="{{ url('/') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @define $i = 0;
    <div class="linha">
      <div class="coluna centro">Sábado</div>
      @foreach ($sabado as $task)
        <input type="checkbox" id='{{ $task->id }}' name="task[{{ $i++ }}]" value='{{ $task->id }}'>
          <label for='{{ $task->id }}' class="coluna">
            @if ($task->inicio)
            <span class="leftbox">
              <input type='hidden' id='inicio{{ $task->id }}' value='{{ $task->inicio }}'>
              <input type='hidden' id='fim{{ $task->id }}' value='{{ $task->fim }}'>
              <span id='ini{{ $task->id }}'></span><br><span id='end{{ $task->id }}'></span>
                <script>
                  $('#inicio{{ $task->id }}').mask('9999 99 99 99 99 99');
                  $('#fim{{ $task->id }}').mask('9999 99 99 99 99 99');

                  var data = $('#inicio{{ $task->id }}').val().split(' ');
                  var datas = $('#fim{{ $task->id }}').val().split(' ');
                  $('#ini{{ $task->id }}').html(data[3] + ':' + data[4]);
                  $('#end{{ $task->id }}').html(datas[3] + ':' + datas[4]);
                </script>
            </span>
            @endif
              @if ($task->professor)  <strong>Palestrante: </strong>{{ $task->professor }} <br> @endif
              @if ($task->curso)  <strong> {{ $task->curso }}</strong></label> @endif
      @endforeach
    </div>
  <button type="submit" class="btn" id="inscricao">Inscrever-se</button>
</form>
@endsection
