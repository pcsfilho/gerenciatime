@extends('admin/layouts/app')
@section('content')
    <div class="content-wrapper">
      <section class="content-header">
        <ol class="breadcrumb">
          <li><a href="{{route('employee.list')}}"><i class="fa fa-dashboard"></i>GerenciaTimer Admin</a></li>
          <li ><a href="{{route('employee.list')}}">Funcionários</a></li>
          <li >{{$user->name}}</li>
          <li class="active">Registro</li>
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
              <h3 class="box-title">Registros</h3>
            </div>
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>Nº</th>
                  <th>Funcionário</th>
                  <th>Tipo</th>
                  <th>Data</th>
                  <th>Hora de início</th>
                  <th>Hora de fim</th>
                </tr>
                </thead>
                <tbody>
                  @if(@$times!=null)
                    @foreach($times as $time)
                      <a href="#">
                      <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$time->user()->name}}</td>
                        <td>
                          @if($time->type_time=='job')
                            Diário
                          @elseif($time->type_time=='lunch')
                            Almoço
                          @else
                            Intervalo
                          @endif
                        </td>
                        <td>{{$time->timeday()->date}}</td>
                        <td>{{$time->time_start}}</td>
                        <td>{{$time->time_end}}</td>
                      </tr>
                      </a>
                    @endforeach
                  @endif
                </tbody>
                <tfoot>
                <tr>
                  <th>Nº</th>
                  <th>Funcionário</th>
                  <th>Tipo</th>
                  <th>Data</th>
                  <th>Hora de início</th>
                  <th>Hora de fim</th>
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