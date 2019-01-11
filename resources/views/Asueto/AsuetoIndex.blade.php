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



    <div class="col-md-6 col-ms-6 col-xs-12">
        <h3>Gestión de días no laborales</h3>
    </div>
    <div class="col-md-6 col-ms-6 col-xs-12 text-right">
        <a href="{{route('dayOFF.create')}}" class="btn btn-success">Agrega</a>
        <br>
        <br>
    </div>






       @foreach($days as $key => $value)
             <div class="col-md-4 col-sm-12 col-xs-12"><br> <br> 
                    <div class="ibox">
                        <div class="ibox-content product-box">

                           
                            <div class="product-desc">
                                <span class="product-price">
                                   {{date("d-m-Y",strtotime($value->fecha)) }}
                                </span>
                                <a  class="product-name"> {{ $value->descripcion}}</a>
                                
                                
                                 <div class="m-t text-righ">
                                       <a class="btn btn-warning" href="{{route('dayOFF.edit',$value->id)}}">
                                       <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a> 
                                   
                                </div>
                                <div class="m-t text-righ">

                                    {!! Form::open(['route' => ['dayOFF.destroy', $value->id], 'method' => 'DELETE']) !!}
                                                    <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-danger">
                                                          <i class="fa fa-trash" aria-hidden="true"></i> Eliminar
                                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       @endforeach

       <div class="col-md-12">
         {{$days->render()}}
       </div>

       











</div>



@endsection
