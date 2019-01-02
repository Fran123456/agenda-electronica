@extends('layouts.app')

@section('content')

<style type="text/css">
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
                        toastr.success("Notificación generada con exito", "Exito");
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
        <h3>Gestión de notificaciones enviadas</h3>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{route('Notificaciones.create')}}" class="btn btn-success"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>
 Crear notificación</a>
        <br>
        <br>
    </div>




          <div class="col-lg-12 col-ms-12 col-xs-12">
                   <div class="ibox float-e-margins" >
                            <div class="ibox-content" >
                                <div class="table-responsive">
                                   <table class="table table-bordered table-hover table-striped" id="asueto">
                                        <thead>
                                            <tr class="">
                                                <th width="60">N°</th>
                                                <th >Título</th>
                                                 <th>Fecha</th>
                                                <th width="100">Ver</th>
                                                <th width="100">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($misNotis as $key => $value)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$value->titulo}}</td>
                                                <td>{{$value->created_at}}</td>
                                                <td><a class="btn btn-info" href="{{route('nueva-notificacion',$value->codigo_noty)}}">
                                                  <i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                                <td>
                                                    <a class="btn btn-danger" href="{{route('delete-noti-send',$value->codigo_noty)}}">
                                                     <i class="fa fa-trash" aria-hidden="true"></i></a>
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
