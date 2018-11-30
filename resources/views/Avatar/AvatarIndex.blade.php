@extends('layouts.app')

@section('content')



<div class="container">

    <div>
        @if(session('agregado'))
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
                        toastr.success("Agregado correctamente", "Exito");
          </script>
       @endif
    </div>

    
    <div class="col-md-6">
        <h3>Gestión de avatars</h3>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{route('avatar.create')}}" class="btn btn-success">Agrega</a>
        <br>
        <br>
    </div>

   

    <table class="table table-bordered table-hover table-striped" id="avatar2">

        <thead>
            <tr class="">
                <th width="60">N°</th>
                <th width="80">Multimedia</th>
                <th>Tipo</th>
                <th width="100">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($avatars as $key => $value)
            <tr>
                <td>{{$key +1}}</td>
                <td class="text-center">
                   <img height="60px" width="60px" src="{{ $value->url }}"></a>
                </td>
                <td>{{$value->nombre}}</td>             
                <td>
                 <button type="submit" class="btn btn-sm btn-danger"> Eliminar</button> 
                 </td>                       
            </tr>
            @endforeach
        </tbody>
    </table>
                           
</div>



@endsection
