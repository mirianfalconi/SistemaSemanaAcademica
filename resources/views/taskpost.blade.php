@extends('layout.loginapp')

@section('content')

@if (count($sabado) > 0)


<form role="form" method="POST"  action="{{ url('/') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

@define $i = 0;
          <div class="linha">
              <div class="coluna centro">Sábado</div>
              @foreach ($sabado as $tasks)
              @foreach ($tasks as $task)
                <input type="checkbox" id='{{ $task->id }}' name="task[{{ $i++ }}]" value='{{ $task->id }}'>
                <label for='{{ $task->id }}' class="coluna">
                  <strong>Horário: </strong>{{ $task->horario }} <br>
                  <strong>Professor: </strong>{{ $task->professor }} <br>
                  <strong>Curso: </strong>{{ $task->curso }}</label>
              @endforeach
              @endforeach
          </div>

    <button type="submit" class="btn" id="inscricao">
      Inscrever-se
    </button>
  </form>


  @endif
@endsection
