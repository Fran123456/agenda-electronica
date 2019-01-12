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



    <div class="col-md-6 col-sm-6 col-xs-12">
        <h3>{{ $titulo }}</h3>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 text-right">
        <a href="{{route('Tareas.create')}}" class="btn btn-success"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>
             Asignar tarea</a>
        <br>
        <br>
    </div>




  @foreach($tareas as $key => $value)
             <div class="col-md-4 col-sm-12 col-xs-12"><br> <br>
                    <div class="ibox">
                        <div class="ibox-content product-box">


                            <div class="product-desc">
                                <span class="product-price">
                                  {{$value->Titulo}}
                                </span>
                                 <div class="m-t text-righ">

                                         <div>
                                              <table class="table table-responsive">
                                                  <tbody>
                                                  <tr class="text-center">

                                                        @if($value->estado == "Inicio")
                                                         <td class="a"><h3><span class="label label-default">{{ $value->estado}}</span></h3></td>
                                                        @elseif($value->estado == "Proceso")
                                                          <td class="b"><h3><span class="label label-warning">{{ $value->estado}}</span></h3></td>
                                                        @elseif($value->estado == "Finalizado")
                                                          <td class="c"><h3><span class="label label-primary">{{ $value->estado}}</span></h3></td>
                                                         @else
                                                          <td class="d"><h3><span class="label label-danger">{{ $value->estado}}</span></h3></td>
                                                         @endif




                                                  </tr>
                                                  <tr class="text-center">
                                                      <td>
                                                        Finaliza:  {{ date("d-m-Y",strtotime($value->fecha_finalizacion))    }}

                                                      </td>


                                                  </tr>
                                                    @if($value->estado != 'No terminada')
                                                  <tr>
                                                      <td class="text-center">
                                                            <a class="btn btn-default btn-xs btn-outline"  href="{{route('cambiar-estado-inicio',$value->codigo_tarea)}}"><i class="fa fa-play" aria-hidden="true"></i>   Iniciar </a>
                                                      </td>
                                                  </tr>
                                                  <tr><td class="text-center"> <a class="btn btn-warning btn-xs btn-outline" href="{{route('cambiar-estado-proceso',$value->codigo_tarea)}}"><i class="fa fa-clock-o" aria-hidden="true"></i>  En proceso</a></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="text-center"><a class="btn btn-primary btn-xs btn-outline"  href="{{route('cambiar-estado-finalizado',$value->codigo_tarea)}}"><i class="fa fa-check" aria-hidden="true"></i>  Finalizado</a></td>
                                                  </tr>
                                                @else
                                                    <tr>
                                                      <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-center">-</td>
                                                    </tr><tr>
                                                      <td class="text-center">-</td>
                                                    </tr>
                                                @endif


                                                   @if(Auth::user()->rol =="super")
                                                   <tr>
                                                       <td class="text-center">
                                                         <a class="btn btn-info btn-circle " href="{{route('Tareas.show',$value->codigo_tarea)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                         <a class="btn btn-warning btn-circle " href="{{route('Tareas.edit' , $value->codigo_tarea)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                       {!! Form::open(['route' => ['Tareas.destroy', $value->codigo_tarea], 'method' => 'DELETE']) !!}
                                                            <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-danger btn-circle ">
                                                                  <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        {!! Form::close() !!}</td>
                                                   </tr>
                                                @else
                                                  <tr>
                                                      <td class="text-center">
                                                        <a class="btn btn-info btn-circle " href="{{route('Tareas.show',$value->codigo_tarea)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                  </tr>

                                                @endif
                                                  </tbody>
                                              </table>
                                          </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
       @endforeach

       <div class="col-md-12">
         {{$tareasxuser->render()}}
       </div>





</div>

@endsection
