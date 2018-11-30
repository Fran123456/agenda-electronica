@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            <div>
               @if(session('agregado'))
                <script type="text/javascript">
                     toastr.options = {
                          "closeButton": true,
                          "debug": false,
                          "progressBar": false,
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
                        toastr.success("Peril actualizado correctamente", "Exito");
                      </script>
               @endif
            </div>




            <div class="panel panel-default">
                <div class="panel-heading">Mi perfil</div>
                 <form action="{{route('updatePerfil',$perfil->id)}}" method="post">
                  {{csrf_field()}}
                <div class="panel-body">
                   <div class="row">
                       <div class="col-md-12">
                           <label>Nombre:</label>
                           <input type="text" disabled="true" id="name" name="name" value="{{$perfil->name}}" class="form-control">
                           <br>
                       </div>
                       
                       <div class="col-md-12">
                           <label>Correo electronico:</label>
                           <input type="text" name="email" id="email" readonly="" value="{{$perfil->email}}" class="form-control">
                           <br>
                       </div>
                       <div class="col-md-10">
                           <label>Avatar:</label>
                              <div id="sel">
                                  <select disabled="true" id="avatar" onchange="perfil();" name="avatar_img"  class="form-control">
                                      @foreach ($urls as $url)
                                        @if( $url->url == $perfil->avatar_img )
                                           <option value="{{$url->url}}" selected="">{{$url->nombre}}</option>
                                        @else
                                            <option value="{{$url->url }}">{{$url->nombre}}</option>
                                        @endif
                                      @endforeach
                                  </select>
                              </div>
                              <br>
                       </div>
                       <div class="col-md-2">
                        <br>
                            <div id="ava">
                               <img id="imgavatar" height="40" width="40" src="{{asset($perfil->avatar_img)}}">
                            </div>
                       </div>
                       <div class="col-md-12 text-right">
                        <div id="b"><button  onclick="editar();" type="button" class="btn btn-info">Editar</button></div>
                        <div id="c"></div>
                           
                       </div>
                   </div>
                  
              </div>
             
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">

 
    function editar(){
       
        $('#name').prop('disabled', false);
        $('#avatar').prop('disabled', false);

        $('#b').remove();
        $('#c').append('<input type="submit" class="btn btn-success" name="" value="Guardar">');
    }



    function perfil(){
       var dato = $('#avatar').val();
       $('#imgavatar').attr('src',dato);
    }
</script>
@endsection
