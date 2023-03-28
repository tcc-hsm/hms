@extends ('layout.index')

@section('title','Blanks Barbearia')

@section('content')

<br><br>
<center>
<div class="agendamento">
    <h2>Cadastro de Horário</h2>
<br>
<form action="/desenvolvimento" method="post">
@csrf
    <label for="data">Data</label>
    <input type="date" class="form-control" name="data" require><br>

    <label for="hora" id="hora" hidden>Hora</label>
    <input type="number" class="form-control" name="hora" id="hora" hidden><br>

    <label for="minuto" id="hora" hidden>Minuto</label>
    <input type="number" class="form-control" name="minuto" id="hora" hidden><br>

    <br><br>
    
    <input type="submit" class="btn btn-warning" value="Liberar Agenda"><br><br>

    <label for="">Deseja liberar horário especifico?</label><br>
    <input type="checkbox" onclick="liberar_horario();">

</form>
</center>
</div>


@endsection