@extends('layout.loginapp')

@section('content')

@if (count($sabado) > 0)


  <article>
          <div class="linha">
              <div class="coluna centro">Quinta-Feira</div>
              @foreach ($quinta as $task)
                <input type="checkbox" id='{{ $task->id }}' name='{{ $task->id }}' value='{{ $task->id }}' >
                <label for='{{ $task->id }}' class="coluna">
                  <strong>Horário: </strong>{{ $task->horario }} <br>
                  <strong>Professor: </strong>{{ $task->professor }} <br>
                  <strong>Curso: </strong>{{ $task->curso }}</label>
              @endforeach
          </div>

          <div class="linha">
              <div class="coluna centro">Sexta-Feira</div>
              @foreach ($sexta as $task)
                <input type="checkbox" id='{{ $task->id }}' name='{{ $task->id }}' value='{{ $task->id }}'>
                <label for='{{ $task->id }}' class="coluna">
                  <strong>Horário: </strong>{{ $task->horario }} <br>
                  <strong>Professor: </strong>{{ $task->professor }} <br>
                  <strong>Curso: </strong>{{ $task->curso }}</label>
              @endforeach
          </div>

          <div class="linha">
              <div class="coluna centro">Sábado</div>
              @foreach ($sabado as $task)
                <input type="checkbox" id='{{ $task->id }}' name='{{ $task->id }}' value='{{ $task->id }}'>
                <label for='{{ $task->id }}' class="coluna">
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


                var cursos = function() {
                      var data = $( "input:checked" ).serialize();
                      $("#inscricao").submit();
                      $.post("/", data, function (res) {
                            console.log('res', res);
                        });

                  };

                $( "#inscricao" ).on( "click", cursos );


            </script>


  @endif
@endsection
