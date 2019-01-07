@extends('layouts.app')

@section('content')


<style type="text/css">
    .wrapper-content {
    padding: 10px 10px 10px;
}
</style>


<div class="container" >
    <div class="text-center"><h3>Chat grupal</h3></div>
    <div class="row">
            <div class="col-md-12" >
                <iframe style="border: 2px solid #C1EBD5" src="https://www4.cbox.ws/box/?boxid=4341309&boxtag=Fq3FmW" width="100%" height="450" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto"></iframe> 
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
