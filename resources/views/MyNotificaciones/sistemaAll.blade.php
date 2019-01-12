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

ul.notes li div a.data {
    position: absolute;
    left: 10px;
    bottom: 10px;
    color: inherit;
}

ul.notes li {
    margin-top: 10px;
    margin-right: 40px;
    margin-bottom: 10px;
    margin-left: 0px;
    float: left;
}

ul.notes li div {
    text-decoration: none;
    color: #000;
    background: #ffc;
    display: block;
    height: 180px;
    width: 210px;
    padding: 1em;
    -moz-box-shadow: 5px 5px 7px #212121;
    -webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
    box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
    -moz-transition: -moz-transform 0.15s linear;
    -o-transition: -o-transform 0.15s linear;
    -webkit-transition: -webkit-transform 0.15s linear;
}

ul.notes li div {
  -webkit-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  -moz-transform: rotate(-6deg);
  -ms-transform: rotate(-6deg);
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



    <div class="col-md-6 col-xs-12">
        <h3>Gestión de notificaciones enviadas</h3>
    </div>
    <div class="col-md-6 col-xs-12 text-right">
        <a href="{{route('Notificaciones.create')}}" class="btn btn-success"> <i class="fa fa-thumb-tack" aria-hidden="true"></i>
 Crear notificación</a>
        <br>
        <br>
    </div>




    @foreach($misNotis as $key => $value)
           <div class="col-md-3 col-xs-12">
                         <div class="wrapper wrapper-content animated fadeInUp">
                                   <ul class="notes">
                                        <li>
                                         <div>

                                             <small>{{$value->created_at}}</small>
                                             <br>
                                             {{$value->titulo}}
                                             <br><br>
                                             Estado: {{ $value->estado}}

                                                 <a class="data"  href="{{route('nueva-notificacion',$value->codigo_noty)}}">
                                                   <i class="fa fa-eye" aria-hidden="true"></i></a>

                                                 <a href="{{route('delete-noti-send',$value->codigo_noty)}}"><i class="fa fa-trash-o "></i></a>


                                         </div>
                                        </li>
                                  </ul>
                           </div>
                     </div>
     @endforeach
    <br>
    <div class="container text-center">
      <div class="col-md-12">
        {{$misNotis->render()}}
      </div>
    </div>

  <br>
</div>








@endsection
