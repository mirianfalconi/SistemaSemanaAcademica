{{--*/ $i = '1' /*--}}
<div class="todo">


<input  type='hidden' id='quebra1' value='0000-00-00 00:00:00'>
  <div class="coluna centro inteira">Quinta-Feira 05/05/2016</div>
  @foreach ($quinta as $tasks)
  <div class='linha'>
      @foreach ($tasks as $task)
        <div class='quebra1{{ $i }}'>
        <script>

          var i = '{{ $i }}';
          var agora = '{{ $task->inicio }}';
          var antes = $('#quebra1').val();

          if(antes == '0000-00-00 00:00:00'){
            $('#quebra1').val(agora);
          }

          if(antes != agora){
            $('#quebra1').val(agora);
            $( ".quebra1"+i ).html("</div><div class='linha'>");
          }


        </script>
        @include('helpers.partial')
        {{--*/ $i++ /*--}}
      </div>
      @endforeach
    </div>
  @endforeach

{{--*/ $i = '1' /*--}}

<input  type='hidden' id='quebra2' value='0000-00-00 00:00:00'>
  <div class="coluna centro inteira">Sexta-Feira 06/05/2016</div>
@foreach ($sexta as $tasks)
    <div class='linha'>
      @foreach ($tasks as $task)
        <div class='quebra2{{ $i }}'>
        <script>

          var i = '{{ $i }}';
          var agora = '{{ $task->inicio }}';
          var antes = $('#quebra2').val();

          if(antes == '0000-00-00 00:00:00'){
            $('#quebra2').val(agora);
          }

          if(antes != agora){
            $('#quebra2').val(agora);
            $( ".quebra2"+i ).html("</div><div class='linha'>");
          }


        </script>
        @include('helpers.partial')
        {{--*/ $i++ /*--}}
        </div>
      @endforeach
  </div>
@endforeach

{{--*/ $i = '1' /*--}}

<input  type='hidden' id='quebra3' value='0000-00-00 00:00:00'>
  <div class="coluna centro inteira">Sábado 07/05/2016</div>
@foreach ($sabado as $tasks)
  <div class='linha'>
      @foreach ($tasks as $task)
        <div class='quebra3{{ $i }}'>
        <script>

          var i = '{{ $i }}';
          var agora = '{{ $task->inicio }}';
          var antes = $('#quebra3').val();

          if(antes == '0000-00-00 00:00:00'){
            $('#quebra3').val(agora);
          }

          if(antes != agora){
            $('#quebra3').val(agora);
            $( ".quebra3"+i ).html("</div><div class='linha'>");
          }


        </script>
        @include('helpers.partial')
        {{--*/ $i++ /*--}}
        </div>
      @endforeach
</div>
@endforeach

