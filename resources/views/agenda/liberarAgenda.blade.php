@extends ('layout.index')

@section('title','Blanks Barbearia')

@section('content')

<br><br>
<center>
<div class="agendamento">
    <h2>Liberar Agenda</h2>
<br>
<form action="/agenda/admin/liberar_agenda" method="post">
@csrf
    <label for="data">Data</label>
    <input type="date" class="form-control" name="data" require><br>
    <br>
    <input type="submit" class="btn btn-warning" value="Liberar Agenda"><br><br>


</form>
</center>
</div>


@endsection