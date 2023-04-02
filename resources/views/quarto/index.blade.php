@extends ('layouts.index')

@section('title','HMS - Home Page')

@section('content')

<br><br>  
<center>
<h2>Quartos</h2><br><br>
</center>
<a href="/quarto/cadastro_quarto" class="btn btn-warning">Cadastrar Quarto</a><br><br>     
    <div class="table">
    <table class="table table-bordered table-striped table-hover" name="table" id="id-tabela"> <!-- Aqui vai ID da tabela -->
        <thead class="table-dark">
                <th scope='col'>Número Quarto</th>
                <th scope='col'>Status</th>
                <th scope='col'>Valor</th>                
                <th scope='col'>Criado</th>                              
                <th scope='col'>Editar</th>                              
        </thead>
        <tbody>
            
            <!-- linhas da minha tabela -> gastos  -->
            <tr>
                @foreach($db as $db) 
                <td>{{$db->id}}</td>
                <td>
                @if ($db->status === '1')
                 Ativo
                @else
                Inativo
                @endif
                </td>
                <td>{{$db->valor}}</td>
                <td>{{$db->created_at}}</td>
                <td><a href="/desenvolvimento" class="btn btn-warning">Editar</a></td>
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