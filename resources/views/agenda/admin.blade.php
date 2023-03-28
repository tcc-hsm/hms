@extends ('layout.index')

@section('title','Blanks Barbearia')

@section('content')

<br><br>  
<center>
<h2>Cadastrar Horário</h2><br>    
<form action="/desenvolvimento" method="post">@csrf<input type="date" name="data">  <input type="submit" class="btn btn-warning" value="Buscar"> </form><br><br>
<a href="/agenda/admin/liberar_agenda" class="btn btn-warning">Cadastrar Horário</a
</center>
    <div class="table">
    <table class="table table-bordered table-striped table-hover" name="table" id="id-tabela"> <!-- Aqui vai ID da tabela -->
        <thead class="table-dark">
                <th scope='col'>ID</th>
                <th scope='col'>Data</th>
                <th scope='col'>Horário</th>                
                <th scope='col'>Excluir</th>                              
                
        </thead>
        <tbody>
            
            <!-- linhas da minha tabela -> gastos  -->
            <tr>
                @foreach($horario as $horario) 
                <td>{{$horario->id}}</td>
                <td>{{$horario->data}}</td>
                <td>{{$horario->hora}}:{{$horario->minuto}}</td>
                <td><button type="" class="btn btn-warning">Excluir</button></td>
                </td>
               <!-- @endeach-->
            </tr>
            @endforeach
         </tbody>
    </table>
  </div>

        <!-- Adicionando Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
        <script>
          $(document).ready( function () {
            $('#id-tabela').DataTable({
              "language": {
                "lengthMenu": "Mostrando _MENU_ Registros por página",
                "zeroRecords": "Nenhum dado foi encontrado.",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro encontrado - vazio",
                "infoFiltered": "(Filtrados de  _MAX_ registros no total)"
              }
            }); //id da tabela
          } );
        </script>


 

<script type="text/javascript">

document.getElementById("downloadexcel").addEventListener('click',function(){
var table2excel = new Table2Excel();
table2excel.export(document.querySelectorAll("#id-tabela"));
});


</script>
<script type="text/javascript" src="assets/script.js"></script>


@endsection