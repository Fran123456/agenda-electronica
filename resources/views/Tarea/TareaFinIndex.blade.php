@extends('layouts.app')

@section('content')

<style type="text/css">
  .table-striped > tbody > tr:nth-of-type(2n+1) {
    background-color: white;
  }

  .a{
    background-color:#E3E7E4;
  }
  .b{
    background-color: #F6E988;
  }
  .c{
    background-color: #ACF5BA;
  }
  .d{
    background-color: #EF9292;
  }
  .pa{
    padding: 20px;
  }


  .container {
  padding-right:0px;
  padding-left: 0px;
  margin-right: auto;
  margin-left: auto;
}

#page-wrapper {
  padding: 0 0px;
  min-height: 568px;
  position: relative !important;
}

</style>

<div class="container">
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
                        toastr.success("Tarea asignada correctamente", "Exito");
          </script>
       @endif

       @if(session('editado'))
         <script type="text/javascript">
                toastr.info("Editado correctamente", "Exito");
         </script>
      @endif

      @if(session('eliminado'))
        <script type="text/javascript">
               toastr.error("Eliminado correctamente", "Exito");
        </script>
      @endif

    </div>



    <div class="col-md-6 col-sm-6 col-xs-6">
        <h3>{{ $titulo }}</h3>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
        <a href="{{route('Tareas.create')}}" class="btn btn-success"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>
             Asignar tarea</a>
        <br>
        <br>
    </div>



     <div class="col-lg-12 col-ms-12 col-xs-12">
               <div class="ibox float-e-margins" >

                        <div class="ibox-content" >

                            <div class="table-responsive">
                                <table  class="table table-striped" id="asueto">
                                    <thead>
                                        <tr class="">
                                            <th width="50">N°</th>
                                            <th >Título</th>
                                            <th class="text-center" width="60">Estado</th>
                                            <th class="text-center" width="100">Fecha finalización</th>
                                            <th class="text-center" width="40">Acción de estados</th>
                                            <th class="text-center" width="30">Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tareas as $key => $value)
                                        <tr class="text-center">
                                            <td>{{$key +1}}</td>
                                            <td>{{$value->Titulo}}</td>
                                           @if($value->estado == "Inicio")
                                             <td class="a"><h3><span class="label label-default">{{ $value->estado}}</span></h3></td>
                                           @elseif($value->estado == "Proceso")
                                              <td class="b"><h3><span class="label label-warning">{{ $value->estado}}</span></h3></td>
                                           @elseif($value->estado == "Finalizado")
                                              <td class="c"><h3><span class="label label-primary">{{ $value->estado}}</span></h3></td>
                                           @else
                                            <td class="d"><h3><span class="label label-danger">{{ $value->estado}}</span></h3></td>
                                          @endif
                                            <td>{{date("d-m-Y",strtotime($value->fecha_finalizacion)) }}</td>



                                        <td>
                                          <!-- Single button -->
                                         <div class="btn-group">
                                           <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             Cambio estados <span class="caret"></span>
                                           </button>
                                           <ul class="dropdown-menu">
                                                @if($value->estado =="No terminada")
                                                    <li class="pa">No hay opciones para una tarea no terminada</li>
                                                @else
                                                    <li><a  href="{{route('cambiar-estado-inicio',$value->codigo_tarea)}}"><i class="fa fa-play" aria-hidden="true"></i>   Iniciar </a></li>
                                                    <li><a href="{{route('cambiar-estado-proceso',$value->codigo_tarea)}}"><i class="fa fa-clock-o" aria-hidden="true"></i>  En proceso</a></li>
                                                    <li><a  href="{{route('cambiar-estado-finalizado',$value->codigo_tarea)}}"><i class="fa fa-check" aria-hidden="true"></i>  Finalizado</a></li>
                                               @endif
                                           </ul>
                                         </div>
                                        </td>

                                        <td>
                                          <!-- Single button -->
                                          <div class="btn-group ">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fa fa-pencil" aria-hidden="true"></i> Opciones generales<span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="btn" href="{{route('Tareas.show',$value->codigo_tarea)}}"><i class="fa fa-eye" aria-hidden="true"></i> ver</a></li>
                                                @if(Auth::user()->rol =="super")
                                                    <li ><a class="btn" href=""><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a></li>

                                                    <li >
                                                      {!! Form::open(['route' => ['Tareas.destroy', $value->codigo_tarea], 'method' => 'DELETE']) !!}
                                                           <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn">
                                                                 <i class="fa fa-trash" aria-hidden="true"></i> Eliminar
                                                           </button>
                                                       {!! Form::close() !!}
                                                    </li>
                                                @endif

                                            </ul>
                                          </div>
                                        </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
             </div>
       </div>
</div>

@endsection
