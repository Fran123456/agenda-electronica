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







<div class="container">
  <div class="row">
    <div class="col-md-5 col-xs-12">
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

             <div class="col-md-7 col-xs-12">
               <div class="text-center"><h3>Mis notas</h3> <a href="{{route('nueva-nota')}}"><i class="fa fa-plus-square" aria-hidden="true"></i></a> </div>
                 <div class="wrapper wrapper-content animated fadeInUp">
                   @if(count($notas) == 0)
                     <div class="well text-center">No hay notas</div>
                   @else
                       <ul class="notes">
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

@if(Auth::user()->rol == "super")
<div class="text-center">
  <hr style="border: 0.4px solid #E6E6E6">
  <h3>Todas las tareas de hoy</h3>
  <hr style="border: 0.4px solid #E6E6E6">
</div>
<div class="container">
  <div class="row">
      @if(count($actividadesHoyA) > 0)
        @foreach($actividadesHoyA as $key => $value)
          <div class="col-md-4 col-sm-12 col-xs-12"><br><br>
                 <div class="ibox">
                     <div class="ibox-content product-box">
                         <div class="product-desc">
                             <span class="product-price">
                               {{$value->Titulo}}
                             </span>
                              <div class="m-t text-righ">
                                           <table class="table table-responsive">
                                               <tbody>
                                               <tr class="text-center">
                                                      @if($value->estado == "Inicio")
                                                      <td class="a"><h2><span class="label label-default">{{ $value->estado}}</span></h2></td>
                                                     @elseif($value->estado == "Proceso")
                                                       <td class="b"><h2><span class="label label-warning">{{ $value->estado}}</span></h2></td>
                                                     @elseif($value->estado == "Finalizado")
                                                       <td class="c"><h2><span class="label label-primary">{{ $value->estado}}</span></h2></td>
                                                      @else
                                                       <td class="d"><h2><span class="label label-danger">{{ $value->estado}}</span></h2></td>
                                                      @endif
                                               </tr>
                                               <tr class="text-center">
                                                   <td>
                                                     <a href="{{route('Tareas.show',$value->codigo_tarea )}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Ver </a>
                                                   </td>
                                               </tr>
                                               <tr>
                                                 <td class="project-people">
                                                    @for($i=0; $i <count($usersA[$key]) ; $i++)

                                                     <a  data-toggle="tooltip" data-placement="left" title="{{$usersA[$key][$i]->name}}" href="{{route('Perfil.show',$usersA[$key][$i]->id)}}"><img alt="image" class="img-circle" src="{{asset($usersA[$key][$i]->avatar_img)}}">
                                                     </a>
                                                    @endfor
                                                 </td>
                                               </tr>
                                               </tbody>
                                           </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
          @endforeach
       @endif
  </div>
</div>
@else
 No hay tareas
@endif
<br>



<div class="text-center">
  <hr style="border: 0.4px solid #E6E6E6">
  <h3>Mis tareas para hoy</h3>
  <hr style="border: 0.4px solid #E6E6E6">
</div>
<div class="container">
  <div class="row">
      @if(count($actividadesHoy) > 0)
        @foreach($actividadesHoy as $key => $value)
          <div class="col-md-4 col-sm-12 col-xs-12"><br><br>
                 <div class="ibox">
                     <div class="ibox-content product-box">
                         <div class="product-desc">
                             <span class="product-price">
                               {{$value->Titulo}}
                             </span>
                              <div class="m-t text-righ">
                                           <table class="table table-responsive">
                                               <tbody>
                                               <tr class="text-center">
                                                      @if($value->estado == "Inicio")
                                                      <td class="a"><h2><span class="label label-default">{{ $value->estado}}</span></h2></td>
                                                     @elseif($value->estado == "Proceso")
                                                       <td class="b"><h2><span class="label label-warning">{{ $value->estado}}</span></h2></td>
                                                     @elseif($value->estado == "Finalizado")
                                                       <td class="c"><h2><span class="label label-primary">{{ $value->estado}}</span></h2></td>
                                                      @else
                                                       <td class="d"><h2><span class="label label-danger">{{ $value->estado}}</span></h2></td>
                                                      @endif
                                               </tr>
                                               <tr class="text-center">
                                                   <td>
                                                     <a href="{{route('Tareas.show',$value->codigo_tarea )}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Ver </a>
                                                   </td>
                                               </tr>
                                               <tr>
                                                 <td class="project-people">
                                                   @for($i=0; $i <count($users[$key]) ; $i++)

                                                    <a  data-toggle="tooltip" data-placement="left" title="{{$users[$key][$i]->name}}" href="{{route('Perfil.show',$users[$key][$i]->id)}}"><img alt="image" class="img-circle" src="{{asset($users[$key][$i]->avatar_img)}}"></a>
                                                   @endfor
                                                 </td>
                                               </tr>
                                               </tbody>
                                           </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
          @endforeach
       @endif
  </div>
</div>


<br><br>




@endsection
