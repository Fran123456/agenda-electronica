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

.product-imitation {
    text-align: center;
    padding-top: 20px;
    padding-bottom: 40px;
    background-color: #f8f8f9;
    color: #bebec3;
    font-weight: 600;
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
        <h3>Gestión de usuarios</h3>
    </div>
    <div class="col-md-6 col-ms-6 col-xs-12 text-right">
        <a href="{{route('Perfil.create')}}" class="btn btn-success">Agrega</a>
        <br>
        <br>
    </div>



<div class="row">
        @foreach($users as $key => $value)
           <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                              <img src="{{ $value->avatar_img}}" alt="">

                            </div>

                            <div class="product-desc">
                                <span class="product-price">
                                    {{ $value->name}}
                                </span>
                                <small class="text-muted">{{$value->rol}}</small>
                                <h4>{{ $value->email}}</h4>

                                <div class="m-t text-righ">
                                    @if($value->rol =="soporte")
                                      <button disabled="" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                      <button disabled="" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>

                                    @elseif($value->id == Auth::user()->id)
                                      <div class="row">
                                        <div class="col-xs-12 text-center">
                                          <a class="btn btn-warning" href="{{route('actualizar-perfil',$value->id)}}">
                                           <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                        </div>
                                      </div>
                                    @else
                                      <div class="row">
                                        <div class="col-xs-6 text-right">
                                          <a class="btn btn-warning" href="{{route('actualizar-perfil',$value->id)}}">
                                           <i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                        </div>
                                        <div class="col-xs-6 text-left">
                                          {!! Form::open(['route' => ['Perfil.destroy', $value->id], 'method' => 'DELETE']) !!}
                                               <button onclick="return confirm('Estas seguro de Eliminar este Registro')" class="btn btn-sm btn-outline btn-danger">
                                                     <i class="fa fa-trash" aria-hidden="true"></i>Eliminar
                                               </button>
                                           {!! Form::close() !!}
                                        </div>
                                      </div>

                                   @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
</div>

<div class="container">
  {{$users->render()}}
</div>



 <!--<div class="col-lg-12 col-ms-12 col-xs-12">
               <div class="ibox float-e-margins" >
                        <div class="ibox-content" >
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="asueto">
                                    <thead>
                                        <tr class="">
                                            <th width="50">N°</th>
                                            <th >Nombre</th>
                                            <th >Avatar</th>
                                            <th>Correo</th>
                                            <th>Rol</th>
                                            <th width="50">Editar</th>
                                            <th width="50">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $value)
                                        <tr>
                                            <td>{{$key +1}}</td>

                                             <td>{{ $value->name}}</td>
                                              <td class="text-center"><img  src="{{ $value->avatar_img}}" width="50" height="50" ></td>
                                            <td>{{ $value->email}}</td>
                                            <td>{{$value->rol}}</td>

                                            @if($value->rol =="soporte")
                                              <td>
                                              <button disabled="" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                              </td>
                                             <td>
                                               <button disabled="" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                             </td>
                                             @elseif($value->id == Auth::user()->id)

                                             <td><a class="btn btn-warning" href="{{route('actualizar-perfil',$value->id)}}">
                                              <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                              <td>
                                               <button disabled="" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                             </td>

                                             @else
                                              <td><a class="btn btn-warning" href="{{route('actualizar-perfil',$value->id)}}">
                                              <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                              <td>
                                               {!! Form::open(['route' => ['Perfil.destroy', $value->id], 'method' => 'DELETE']) !!}
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
                        </div>
             </div>
       </div>-->








</div>



@endsection
