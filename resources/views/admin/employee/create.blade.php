@extends('admin/layouts/app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastrar Funcionário
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{--route('admin')--}}"><i class="fa fa-dashboard"></i>GerenciaTimer Admin</a></li>
        <li><a href="{{route('employee.list')}}">Funcionários</a></li>
        <li class="active">Criar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('employee.store')}}" method="POST">
              @csrf

              <div class="box-body">
                <div class="row">
                  <div class="col-lg-6 col-lg-offset-3">
                      <div class="form-group">
                      <label for="name">Nome</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nome  do Funcionário" >
                    </div>
                    <div class="form-group">
                      <label for="registration">Matrícula</label>
                      <input type="text" class="form-control" id="registration" name="registration" placeholder="Matrícula  do Funcionário">
                    </div>  
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                  </div>
                  
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        <!-- /.col-->
      </div>
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  @endsection