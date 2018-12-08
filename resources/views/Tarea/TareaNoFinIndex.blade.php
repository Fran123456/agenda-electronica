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



    <div class="col-md-6">
        <h3>{{ $titulo }}</h3>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{route('Tareas.create')}}" class="btn btn-success"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>
 Asignar tarea</a>
        <br>
        <br>
    </div>
    <table class="table table-bordered table-hover table-striped" id="asueto">
        <thead>
            <tr class="">
                <th width="50">N°</th>
                <th >Título</th>
                <th class="text-center" width="60">Estado</th>
                <th class="text-center" width="100">Fecha finalización</th>
                <th class="text-center" width="40">Reprogramar</th>
                <th class="text-center" width="30">Ver</th>
                 @if(Auth::user()->rol =="super")
                <th class="text-center" width="30">Editar</th>
                <th class="text-center" width="30">Eliminar</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $key => $value)
            <tr class="text-center">
                <td>{{$key +1}}</td>
                <td>{{$value->Titulo}}</td>
                  <td class="d"><h3><span class="label label-danger">{{ $value->estado}}</span></h3></td>

                <td>{{$value->fecha_finalizacion}}</td>
                  
              <td><a  class="btn btn-info" href="">
                  <i class="fa fa-clock-o" aria-hidden="true"></i></a></td>
              
               <td><a  class="btn btn-success" href="{{route('Tareas.show',$value->codigo_tarea)}}">
                  <i class="fa fa-eye" aria-hidden="true"></i></a></td>


                @if(Auth::user()->rol =="super")
                <td><a class="btn btn-warning" href="{{route('dayOFF.edit',$value->id)}}">
                  <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                <td>
                   {!! Form::open(['route' => ['dayOFF.destroy', $value->id], 'method' => 'DELETE']) !!}
                        <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-danger">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    {!! Form::close() !!}
                 </td>
                 @endif
            </tr>
            @endforeach
        </tbody>
    </table>

</div>



@endsection
