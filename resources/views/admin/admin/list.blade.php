@extends('admin/layouts/app')
@section('content')
    <div class="content-wrapper">
      <section class="content-header">
        <ol class="breadcrumb">
          <li><a href="{{--route('admin')--}}"><i class="fa fa-dashboard"></i>GerenciaTimer Admin</a></li>
          <li class="active">Administradores</li>
        </ol>
      </section>
      <br>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Funcionários</h3>
              <a class="col-lg-offset-4 btn btn-success" href="{{route('admin.create')}}">Adicionar Administrador</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>Nº</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th style="text-align:center">Editar</th>
                  <th style="text-align:center">Deletar</th>
                </tr>
                </thead>
                <tbody>
                  {{--@foreach($employees as $employee)
                    <tr>
                      <td>{{$loop->index + 1}}</td>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->registration}}</td>
                      <td style="text-align:center"><a href="{{route('admin.employee.edit',$employee->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                      <td style="text-align:center">
                        <form id="delete-form-{{$employee->id}}" style="display: none;" action="{{route('admin.employee.destroy',$employee->id)}}" method="POST">
                          @csrf
                          {{method_field('DELETE')}}
                        </form>
                        <a href="" onclick="
                          if(confirm('Você tem certeza que deseja excluir este funcionário?'))
                            {
                              event.preventDefault();
                              document.getElementById('delete-form-{{$post->id}}').submit();
                            }else{
                              event.preventDefault();}
                        ">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a></td>
                    </tr>
                  @endforeach  --}}
                </tbody>
                <tfoot>
                <tr>
                  <th>Nº</th>
                  <th>Nome</th>
                  <th>Matrícula</th>
                  <th style="text-align:center">Editar</th>
                  <th style="text-align:center">Deletar</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>
@endsection
@section('footerpage')
  <script>
    $(function () {
      $('#example1').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        "language": {
          "oPaginate":{
          "sNext": "Próxima",
            "sPrevious": "Anterior"
          },
          "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Nada encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "infoFiltered": "(filtrado de _MAX_ registros totais)",
            "sSearch": "Buscar: "
        }
      })
    })
  </script>
@endsection