@extends('layouts.app')

@section('content')

<style type="text/css">
    .wrapper-content {
    padding: 10px 10px 10px;
}



ul.notes li div {
    text-decoration: none;
    color: #000;
    background: #ffc;
    display: block;
    height: 210px;
    width: 230px;
    padding: 1em;
    -moz-box-shadow: 5px 5px 7px #212121;
    -webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
    box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
    -moz-transition: -moz-transform 0.15s linear;
    -o-transition: -o-transform 0.15s linear;
    -webkit-transition: -webkit-transform 0.15s linear;
}
</style>


<link rel="stylesheet" type="text/css" href="{{asset('CLNDR-master/demo/css/clndr.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="{{asset('CLNDR-master/src/clndr.js')}}"></script>
<script src="{{asset('CLNDR-master/demo/demo.js')}}"></script>





<div>
      <script type="text/javascript">
      toastr.options = {
           "closeButton": true,
           "debug": false,
           "progressBar": false,
           "preventDuplicates": false,
           "positionClass": "toast-top-center",
           "showDuration": "400",
           "hideDuration": "1000",
           "timeOut": "7000",
           "extendedTimeOut": "1000",
           "showEasing": "swing",
           "hideEasing": "linear",
           "showMethod": "fadeIn",
           "hideMethod": "fadeOut"
         }
      </script>
        @if(session('agregado'))
          <script type="text/javascript">
                        toastr.success("Nota agregada correctamente", "Exito");
          </script>
       @endif

     

      @if(session('eliminado'))
        <script type="text/javascript">
               toastr.error("Nota eliminada", "Exito");
        </script>
      @endif

    </div>










 <div class="col-md-5">
                   <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>CALENDARIO</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                                     <div class="cal1"></div>
                                    <div class="cal2">
                                        <script type="text/template" id="template-calendar">
                                        </script>
                                     </div>
       
                        </div>
                    </div>
          </div>

          <div class="col-md-7">
            <div class="text-center"><h3>Mis notas</h3> <a href="{{route('nueva-nota')}}"><i class="fa fa-plus-square" aria-hidden="true"></i></a> </div>
              <div class="wrapper wrapper-content animated fadeInUp">
                    <ul class="notes">
                        @if(count($notas) == 0)
                          <div class="well text-center">No hay notas</div>
                        @else
                        @foreach($notas as $value)
                        <li>
                            <div>
                                <small>{{$value->created_at}}</small>
                                <br>
                                {{$value->contenido}}
                                <a href="{{route('eliminar-nota', $value->id)}}"><i class="fa fa-trash-o "></i></a>
                            </div>
                        </li>
                        @endforeach
                       @endif
                    </ul>
                </div>
          </div>





<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '0ff5e7ad595f03fd3ef4aca0a4bdc72398172fb0';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>






<div class="container" style="padding-bottom: 50px; padding-top: 30px">
@if(Auth::user()->rol == "super")


<div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Todas las tareas para finalizar hoy</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="project-list">
                            @if(count($actividadesHoyA) > 0)
                                <table class="table table-hover">
                                    <tbody>
                                        @foreach($actividadesHoyA as $key => $value)
                                    <tr>
                                        <td class="project-status">
                                            @if($value->estado == "Inicio")
                                            <span class="label label-default">{{$value->estado}}</span>
                                            @elseif($value->estado == "Proceso")
                                             <span class="label label-warning">{{$value->estado}}</span>
                                            @elseif($value->estado == "Finalizado")
                                             <span class="label label-primary">{{$value->estado}}</span>
                                             @endif
                                        </td>

                                        <td class="project-title">
                                            <a href="project_detail.html">{{$value->Titulo}}</a>
                                            <br/>
                                            <small>{{$value->fecha_finalizacion}}</small>
                                        </td>
                                        <td class="project-people">
                                           @for($i=0; $i <count($usersA[$key]) ; $i++)
                                         <!--  <span>{{$usersA[$key][$i]->name}}</span> -->
                                            <a  data-toggle="tooltip" data-placement="left" title="{{$usersA[$key][$i]->name}}" href="{{route('Perfil.show',$usersA[$key][$i]->id)}}"><img alt="image" class="img-circle" src="{{asset($usersA[$key][$i]->avatar_img)}}"></a>
                                           @endfor
                                        </td>
                                        <td class="project-actions">
                                            <a href="{{route('Tareas.show',$value->codigo_tarea )}}" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> Ver </a>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h3>No hay tareas</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   


@endif



    <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Mis Tareas por finalizar hoy</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="project-list">
                              @if(count($actividadesHoy) > 0)
                                <table class="table table-hover">
                                    <tbody>
                                        @foreach($actividadesHoy as $key => $value)
                                    <tr>
                                        <td class="project-status">
                                            @if($value->estado == "Inicio")
                                            <span class="label label-default">{{$value->estado}}</span>
                                            @elseif($value->estado == "Proceso")
                                             <span class="label label-warning">{{$value->estado}}</span>
                                            @elseif($value->estado == "Finalizado")
                                             <span class="label label-primary">{{$value->estado}}</span>
                                             @endif
                                        </td>

                                        <td class="project-title">
                                            <a href="project_detail.html">{{$value->Titulo}}</a>
                                            <br/>
                                            <small>{{$value->fecha_finalizacion}}</small>
                                        </td>
                                        <td class="project-people">
                                           @for($i=0; $i <count($users[$key]) ; $i++)
                                         <!--  <span>{{$users[$key][$i]->name}}</span> -->
                                            <a  data-toggle="tooltip" data-placement="left" title="{{$users[$key][$i]->name}}" href="{{route('Perfil.show',$users[$key][$i]->id)}}"><img alt="image" class="img-circle" src="{{asset($users[$key][$i]->avatar_img)}}"></a>
                                           @endfor
                                        </td>
                                        <td class="project-actions">
                                            <a href="{{route('Tareas.show',$value->codigo_tarea )}}" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> Ver </a>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h3>No hay tareas</h3>
                  
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
</div>


@endsection
