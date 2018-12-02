@extends('layouts.app')

@section('content')
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
                        toastr.success("Agregado correctamente", "Exito");
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
        <h3>Gestión de días no laborales</h3>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{route('dayOFF.create')}}" class="btn btn-success">Agrega</a>
        <br>
        <br>
    </div>
    <table class="table table-bordered table-hover table-striped" id="asueto">
        <thead>
            <tr class="">
                <th width="60">N°</th>
                <th width="80">Fecha</th>
                <th>Descripción</th>
                <th width="100">Editar</th>
                <th width="100">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($days as $key => $value)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$value->fecha}}</td>
                <td>{{ $value->descripcion}}</td>
                <td><a class="btn btn-warning" href="{{route('dayOFF.edit',$value->id)}}">
                  <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                <td>
                   {!! Form::open(['route' => ['dayOFF.destroy', $value->id], 'method' => 'DELETE']) !!}
                        <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-danger">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    {!! Form::close() !!}
                 </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>



@endsection
