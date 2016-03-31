<div class="todo">

  <div class="coluna centro inteira">Quinta-Feira</div>
    <div class="linha">
      @foreach ($quinta as $tasks)
        @foreach ($tasks as $task)
          @include('helpers.partial')
        @endforeach
      @endforeach
    </div>
</div>
  <div class="coluna centro inteira">Sexta-Feira</div>
    <div class="linha">
        @foreach ($sexta as $tasks)
          @foreach ($tasks as $task)
            @include('helpers.partial')
          @endforeach
        @endforeach
    </div>

  <div class="coluna centro inteira">Sábado</div>
    <div class="linha">
      @foreach ($sabado as $tasks)
        @foreach ($tasks as $task)
          @include('helpers.partial')
        @endforeach
      @endforeach
    </div>


  <script>
      $( document ).ready( function() {

        var name, valor;
        var time = {};

        $('input[id^="inicio"]').each( function() {

            name = $(this).attr('id');

            valor = $('input[id="'+name+'"]').val();

             time = {
                id: name,
                value: valor
            };

            if (time.id != null && time.value == valor){
            //  $( 'div[id=quebra"'+name+'"]' ).addClass( '.linhatransform .colunatransform' );

            }

        });

        return false;
      });
  </script>
