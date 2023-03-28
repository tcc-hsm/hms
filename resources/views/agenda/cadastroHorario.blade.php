@extends ('layout.index')

@section('title','Blanks Barbearia')

@section('content')

<br><br>
<center>
<div class="agendamento">
    <h2>Reserva de Horário</h2>
<br>
<form action="/agenda/cadastroHorario" method="post">
@csrf
    <label for="data">Data</label>
    <input type="date" class="form-control" name="data" value="{{$db_horario->data}}" readonly><br>

    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" require><br>

    <label for="hora">Hora</label>
    <input type="number" class="form-control" name="hora" require ><br>

    <label for="minuto">Minuto</label>
    <input type="number" class="form-control" name="minuto" require><br>
    
    <input type="submit" class="btn btn-warning" value="Agendar"><br><br>

</form>
</center>
</div>
@endsection