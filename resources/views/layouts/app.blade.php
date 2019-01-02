<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->



  <!--PLANTILLA---------------------------------------------------------------------->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Toastr -->
    <script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>

<!--PLANTILLA------------------------------------------------------------------------>
<style media="screen">
.minimalize-styl-2 {
  padding: 4px 12px;
  margin: 5px 5px 5px 5px;
  font-size: 14px;
  float: left;
}

.navbar-top-links .dropdown-messages, .navbar-top-links .dropdown-tasks, .navbar-top-links .dropdown-alerts {
  width: 370px;
  min-width: 0;
}


</style>
{!!Noty::__off()!!}

<script type="text/javascript" src="{{asset('js/push.min.js')}}"></script>


<!--Pedimos permisos-->
</head>
<body>
  <div id="wrapper">
      <nav class="navbar-default navbar-static-side" role="navigation">
          <div class="sidebar-collapse">
              <ul class="nav metismenu" id="side-menu">
                  <li class="nav-header">
                      <div class="dropdown profile-element"> <span>
                              <img alt="image" class="img-circle" height="50px" width="50px" src="{{asset(Auth::user()->avatar_img)}}" />
                               </span>
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                              </span> <span class="text-muted text-xs block">{{ Auth::user()->email }} <b class="caret"></b></span> </span> </a>
                          <ul class="dropdown-menu animated fadeInRight m-t-xs">
                              <li><a href="{{route('Perfil.show', Auth::user()->id) }}">Mi perfil</a></li>
                              <li class="divider"></li>
                              <li><a href="{{route('Perfil.edit', Auth::user()->id) }}">Edita perfil</a></li>
                              <li class="divider"></li>
                              <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                              </li>
                          </ul>
                      </div>
                      <div class="logo-element">
                          YETI
                      </div>
                  </li>

                       <li>
                    <a href="{{ route('home')}}"><i class="fa fa-calendar-o" aria-hidden="true"></i> <span class="nav-label">Dashboard</span></a>
                    </li>


                  <li>
                      <a href="Tareas.index"><i class="fa fa-thumb-tack" aria-hidden="true"></i> <span class="nav-label">Tareas</span> <span class="fa arrow"></span></a>




                      <ul class="nav nav-second-level collapse">
                        @if(Auth::user()->rol =="super")
                          <li><a href="{{route('Tareas.index')}}">Todas las tareas</a></li>
                          <li><a href="{{route('tareas-sin-iniciar')}}">Tareas sin iniciar</a></li>
                          <li><a href="{{route('tareas-en-proceso')}}">Tareas en proceso</a></li>
                          <li><a href="{{route('tareas-finalizadas')}}">Tareas finalizadas</a></li>
                         <li><a href="{{route('Mis-tareas')}}">Mis tareas</a></li>
                          <li><a href="{{route('tareas-no-finalizadas')}}">Tareas no finalizadas</a></li>
                        @else
                        <li><a href="{{route('Mis-tareas')}}">Mis tareas</a></li>
                        @endif
                      </ul>
                  </li>

                  @if(Auth::user()->rol =="super")
                  <li>
                    <a href="{{ route('dayOFF.index')}}"><i class="fa fa-calendar-o" aria-hidden="true"></i> <span class="nav-label">Días libres</span></a>
                  </li>

                  <li>
                    <a href="{{ route('avatar.index')}}"><i class="fa fa-smile-o" aria-hidden="true"></i> <span class="nav-label">Avatar</span></a>
                  </li>
                  @endif


                  <li>
                    <a href="Tareas1.index"><i class="fa fa-comment-o" aria-hidden="true"></i> <span class="nav-label">Notificaciones</span> <span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level collapse">
                          <li><a href="{{ route('Notificaciones.index')}}">Mis notificaciones</a></li>
                          <li><a href="{{ route('notificaciones-enviadas')}}">Notificaciones enviadas</a></li>
                      </ul>
                  </li>


                   <li>
                    <a href=""><i class="fa fa-user" aria-hidden="true"></i> <span class="nav-label">Mi perfil</span> <span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level collapse">
                          <li><a href="{{route('Perfil.show', Auth::user()->id) }}">Mi perfil</a></li>
                          <li><a href="{{route('Perfil.edit', Auth::user()->id) }}">Editar perfil</a></li>
                      </ul>
                  </li>


              </ul>

          </div>

      </nav>

      <div id="page-wrapper" class="gray-bg">
          <div class="row border-bottom">
          <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
          <!--<div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
          </div>--->

          <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 " href="#"> <img width="45" height="45" src="{{asset('yeti.png')}}" alt=""> YETI-TASK</a>
          </div>

          <!--<div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
          </div>-->

              <ul class="nav navbar-top-links navbar-right">



                <li class="dropdown" id="mayor">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" id="padreA">
                        <i class="fa fa-bell"></i>  <span class="label label-primary" id="num"></span>
                    </a>

                     <ul class="dropdown-menu dropdown-alerts" id="notisalv">
                     </ul>




                </li>

                  <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  <i class="fa fa-sign-out"></i> Salir
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                  </li>
              </ul>
          </nav>
          </div>

          <div class="wrapper wrapper-content">
                  <!--AQUI VA EL CONTENIDO -->
                      @yield('content')
                  <!--AQUI VA EL CONTENIDO-->
          </div>


          <div class="footer">
                  <div class="pull-right">
                      10GB of <strong>250GB</strong> Free.
                  </div>
                  <div>
                      <strong>Copyright</strong> Example Company &copy; 2014-2017
                  </div>
          </div>

      </div>
    </div>



<!--PLANTILLA----------------------------------------------->

<!-- Mainly scripts -->

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>







    <!--DATATABLE-->
    <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>
    <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/llamarLenguaje.js')}}"></script>


<!--PLANTILLA----------------------------------------------->

<script type="text/javascript">
  window.onload = function (){
    Push.Permission.request();
  }



                         



function obtener(){
 $('#notisalv').remove();
 $('#mayor').append('<ul class="dropdown-menu dropdown-alerts" id="notisalv"></ul>');

 $('#num').remove();
 $('#padreA').append('<span class="label label-primary" id="num"></span>');
  var html2 = "";
  var con = 0;
   $.ajax({
     type: 'ajax',
     method: 'get',
     url: '/push',
     async: false,
     dataType:  'json',
     success: function(data){
      console.log(data);
       con = data.length;

         $("#num").append(con);
       
      if(con > 0 && con != 0){
         for (var i = 0; i < data.length; i++) {
      /*   html2 = html2+ '<li style="background-color: #DBE6E2;">'+
                           '<div class="dropdown-messages-box">'+
                                '<a href="{{Request::root()}}/nueva-notificacion/'+data[i].codigo_noty+'" class="pull-left">'+
                                    '<img class="img-thumbnail img-circle" alt="image"  src="'+data[i].avatar_img+'">'+
                                '</a>'+
                                '<div class="media-body">'+
                                    '<p style="font-size: 13px;">Nueva notificación de:<strong> '+data[i].name+'<br></strong></p>'+
                                     '<p style="font-size: 12px;">'+data[i].titulo+'</p>'+
                                    '<small class="text-muted ">'+data[i].created_at.substr(0,10)+' a las:'+data[i].created_at.substr(10,18)+
                                  '</small>'+
                                '</div>'+
                            '</div>'+
                        '<br></li>'+
         '</li><li class="divider"></li>';*/

         html2 = html2 + '<li >'+
                           '<div class="dropdown-messages-box">'+
                                '<a href="{{Request::root()}}/nueva-notificacion/'+data[i].codigo_noty+'" class="pull-left">'+
                                    '<img alt="image" class="img-circle" src="'+data[i].avatar_img+'">'+
                                '</a>'+
                                '<div class="media-body">'+
                                    'Nueva notificación de: <strong>'+data[i].name+'<br></strong>'+
                                     '<p>'+data[i].titulo+'</p>'+
                                    '<small class="text-muted">'+data[i].created_at.substr(0,10)+' a las:'+data[i].created_at.substr(10,18)+
                                  '</small>'+
                                '</div>'+
                            '</div>'+
                        '</li>'+
         '</li><li class="divider"></li>';

       }
       $("#notisalv").append(html2);
     }else{
      $('#notisalv').append('<h3>No hay notificaciones</h3>');
     }
 
      

     },
     error: function(){
         alert("error");
     }
  });
}
obtener();


function obtenerSecuencia(){
 var numeroNoti = $('#num').text();

  var html2 = "";
  var con = 0;
   $.ajax({
     type: 'ajax',
     method: 'get',
     url: '/push',
     async: false,
     dataType:  'json',
     success: function(data){
       con = data.length;

       if(con > numeroNoti){

         $('#notisalv').remove();
         $('#mayor').append('<ul class="dropdown-menu dropdown-alerts" id="notisalv"></ul>');

         $('#num').remove();
         $('#padreA').append('<span class="label label-primary" id="num"></span>');



         $("#num").append(con);
          for (var i = 0; i < data.length; i++) {
            html2 = html2 + '<li >'+
                           '<div class="dropdown-messages-box">'+
                                '<a href="{{Request::root()}}/nueva-notificacion/'+data[i].codigo_noty+'" class="pull-left">'+
                                    '<img alt="image" class="img-circle" src="'+data[i].avatar_img+'">'+
                                '</a>'+
                                '<div class="media-body">'+
                                    'Nueva notificación de: <strong>'+data[i].name+'<br></strong>'+
                                     '<p>'+data[i].titulo+'</p>'+
                                    '<small class="text-muted">'+data[i].created_at.substr(0,10)+' a las:'+data[i].created_at.substr(10,18)+
                                  '</small>'+
                                '</div>'+
                            '</div>'+
                        '</li>'+
         '</li><li class="divider"></li>';

          }
          $("#notisalv").append(html2);
          //Bienvenida();

          Push.create('Nueva notificación de: '+data[0].name,{
             body: data[0].titulo,
             icon:  data[0].avatar_img,
             timeout : 15000,
             onclick: function(){
              //  window.location='"{{Request::root()}}/nueva-notificacion/'+data[0].codigo_noty+'"';
             },
             vibrate: ['100', '100', '100'],
           })

       }

     },
     error: function(){
         alert("error");
     }
  });
}
setInterval(function(){ obtenerSecuencia(); }, 10000);

</script>

</body>
</html>
