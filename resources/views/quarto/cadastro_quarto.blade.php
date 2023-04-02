@extends ('layouts.index')

@section('title','HMS - Quarto')

@section('content')

<br><br>
<center>
<div class="agendamento">
    <h2>Cadastro de Quarto</h2>
<br>
<form action="/desenvolvimento" method="post">
@csrf
    <label for="valor">Valor</label>
    <input type="text" class="form-control" name="valor" require><br>
    
    <input type="submit" class="btn btn-warning" value="Gravar"><br><br>

</form>
</center>
</div>
@endsection