<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <title>GerenciaTimer</title>
          <!-- Tell the browser to be responsive to screen width -->
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <link rel="stylesheet" href="{{asset('css/style.css')}}">

          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
                <!-- Ionicons -->
          <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
          <!-- Google Font -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="content">
    <div class="panel panel-default">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-center">
        GerenciaTimer
      </h1>

      <div class="well time-numbers bg-aqua" style="padding-top: 0px;">
                    <h1 class="text-center"><i class="glyphicon glyphicon-time text-center"></i>Horário</h1>
                    <h3 class="text-center"><span id="date" class="label label-default text-center"></span></h3>
                    <h1 class="text-center"><span id="clock" class="label label-primary text-center"></span></h1>
                </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" action="{{route('home.store')}}" method="POST">
              @csrf

              <div class="box-body">
                <div class="row">
                  <div class="col-lg-6 col-lg-offset-3">
                     @if($errors->any())
                        <div class="form-group">
                            <h1 class="help-block" style="color:red">{{$errors->first()}}</h2>
                        </div>
                            
                        @endif 
                      <div class="form-group">
                      <label for="name">Selecione o Funcionário</label>
                      <select class="form-control" onchange="changeStatusEmployee();" id="employee" name="employee">
                        <option></option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="type_time">Tipo</label>
                      <select class="form-control" id="type_time" name="type_time">
                        <option value="job">Diário</option>
                        <option value="time_break">Intervalo</option>
                        <option value="lunch">Almoço</option>
                    </select>
                    </div>
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-primary">Ponto</button>
                    </div>
                  </div>
                  
                </div>
              </div>
              <!-- /.box-body -->
            </form>
            
                   
          </div>
        <!-- /.col-->
      </div>
      <div class="col-md-4">
        <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-log-in"></i></span>

            <div class="info-box-content">
                <span class="info-box-text text-center">Diário</span>
                <span class="info-box-number">
                    Início: 
                    <span id="startjob"></span>
                </span>
                <span class="info-box-number">
                    Fim: 
                    <span id="endjob"></span>
                </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-pause"></i></span>

            <div class="info-box-content">
                <span class="info-box-text text-center">Intervalo</span>
                <span class="info-box-number">Início: <span id="startbreak"></span></span>
                <span class="info-box-number">Fim: <span id="endbreak"></span></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-pizza"></i></span>

            <div class="info-box-content">
                <span class="info-box-text text-center">Almoço</span>
                <span class="info-box-number">Início: <span id="startlunch"></span></span>
                <span class="info-box-number">Fim: <span id="endlunch"></span></span>
            </div>
            <!-- /.info-box-content -->
          </div>

        </div>
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Versão</b> 1.0
            </div>
            <strong>Copyright &copy; 2018 <a href="">Gerenciagram</a>.</strong> All rights reserved.
          <script src="{{asset('js/utils.js')}}"></script>
        </footer>
    </body>


<script>
   $(document).ready(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        // Update the count down every 1 second
        var x = setInterval(function() {

        var timeNow = new Date();
        var hours   = timeNow.getHours();
        var minutes = timeNow.getMinutes();
        var seconds = timeNow.getSeconds();
        //var timeString = "" + ((hours > 12) ? hours - 12 : hours);
        var timeString = "" +  hours;
        timeString  += ((minutes < 10) ? ":0" : ":") + minutes;
        timeString  += ((seconds < 10) ? ":0" : ":") + seconds;
        //timeString  += (hours >= 12) ? " P.M." : " A.M.";

        // Display the result in the element with id="demo"
        document.getElementById("clock").innerHTML = timeString;
    }, 1000);

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd = '0'+dd
    } 

    if(mm<10) {
        mm = '0'+mm
    } 

    today = dd + '/' + mm + '/' + yyyy;
    // Display the result in the element with id="demo"
      document.getElementById("date").innerHTML = today;
    });
  


    function changeStatusEmployee()
    {
        var user_id = $( "#employee" ).val();
        var data = { value : user_id};
        $.ajax({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: '/user/time/' + user_id,
          dataType : 'json',
          type: 'POST',
          data: data,
          contentType: false,
          processData: false,
          success:function(response){
            if(response){
                console.log(response);
                for (var i=0; i<response.length; i++) {
                    if('job'== response[i].type_time){
                        if(response[i].time_end!=null)
                            document.getElementById("startjob").innerHTML = " "+response[i].time_start;
                        if(response[i].time_end!=null)
                            document.getElementById("endjob").innerHTML = " "+response[i].time_end;
                    }else if('lunch' == response[i].type_time){
                        if(response[i].time_start!=null)
                            document.getElementById("startlunch").innerHTML = " "+response[i].time_start;
                        if(response[i].time_end!=null)
                            document.getElementById("endlunch").innerHTML = " "+response[i].time_end;
                    }else{
                        if(response[i].time_end!=null)
                            document.getElementById("startbreak").innerHTML = " "+response[i].time_start;
                        if(response[i].time_end!=null)
                            document.getElementById("endbreak").innerHTML = " "+response[i].time_end;
                    }
                    
                }
            }            
          }
     });
    } 
    
</script>
</html>