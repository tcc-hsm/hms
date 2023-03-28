@extends ('layout.index')

@section('title','Blanks Barbearia')

@section('content')

<br><br>
<center>
<div class="agendamento">
    <h2>Reserva de Horário</h2>
<br>
<form action="/agenda/index" method="post">
@csrf
    <label for="data">Data</label>
    <input type="date" class="form-control" name="data" require><br>
    
    <input type="submit" class="btn btn-warning" value="Agendar"><br><br>

</form>
</center>
</div>
@endsection