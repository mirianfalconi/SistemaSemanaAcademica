@extends('layout.app')

@section('content')

@if (count($sabado) > 0)

  <div id="cursos" class="row column center"></div>

  <article>
          <div class="row">
              <div class="column center">Quinta-Feira</div>
              @foreach ($quinta as $task)
                <input type="checkbox" id='{{ $task->id }}' name='quinta' value='{{ $task->id }}' >
                <label for='{{ $task->id }}' class="column">
                  <strong>Horário: </strong>{{ $task->horario }} <br>
                  <strong>Professor: </strong>{{ $task->professor }} <br>
                  <strong>Curso: </strong>{{ $task->curso }}</label>
              @endforeach
          </div>

          <div class="row">
              <div class="column center">Sexta-Feira</div>
              @foreach ($sexta as $task)
                <input type="checkbox" id='{{ $task->id }}' name='sexta' value='{{ $task->id }}'>
                <label for='{{ $task->id }}' class="column">
                  <strong>Horário: </strong>{{ $task->horario }} <br>
                  <strong>Professor: </strong>{{ $task->professor }} <br>
                  <strong>Curso: </strong>{{ $task->curso }}</label>
              @endforeach
          </div>

          <div class="row">
              <div class="column center">Sábado</div>
              @foreach ($sabado as $task)
                <input type="checkbox" id='{{ $task->id }}' name='sabado' value='{{ $task->id }}'>
                <label for='{{ $task->id }}' class="column">
                  <strong>Horário: </strong>{{ $task->horario }} <br>
                  <strong>Professor: </strong>{{ $task->professor }} <br>
                  <strong>Curso: </strong>{{ $task->curso }}</label>
              @endforeach
          </div>
  </article>

  <footer>
    <button type="button" class="btn" id="inscricao">
      Inscrever-se
    </button>
    <br><br>
  </footer>


            <script>
                var countChecked = function() {
                  var n = $( "input:checked" ).length;
                  var n = $( "input:checked" ).name;
                  $( "#cursos" ).text( "Tu estás matriculado em " + n + (n === 1 ? " curso." : " cursos."));
                };
                countChecked();

                $( "#inscricao" ).click(function() {
                  var cursos = $( "input:checked" ).serialize();
                  console.log(cursos.name);
                });

                $( "input[type=checkbox]" ).on( "click", countChecked );

            </script>


  @endif
@endsection
