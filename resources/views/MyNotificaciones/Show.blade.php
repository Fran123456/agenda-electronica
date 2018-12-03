@extends('layouts.app')

@section('content')

<style type="text/css">
  .bordes{
    border: solid 1px #4ACC9F;
    margin-left: 10px;
    margin-right: 10px;
  }
  .espacios{
     margin-top: 10px;
    margin-bottom: 10px;
  }
</style>
<script src="{{asset('ckeditor/ckeditor.js')}}">

</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">

             <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><i class="fa fa-thumb-tack" aria-hidden="true"></i>NOTIFICACIÓN</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal " action="{{route('Notificaciones.store')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Titulo:</label>
                                    <div class="col-lg-10">
                                           <input readonly="" value="{{$noti->titulo}}" type="text" name="titulo" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Mensaje de notificación:</label>
                                     <div class="col-lg-10">
                                        <textarea required name="mensaje" class="form-control" rows="8" readonly="">{{$noti->cuerpo}}</textarea>
                                     </div>
                                  </div>
                                
                            </form>  
                            <div class="well">
                              <h4>Usuarios Enviados:</h4>
                                            <div class="container">
                                                          <div class="row">
                                                            @for($i = 0; $i <count($perfiles); $i++)
                                                            <div class="col-md-3 bordes">
                                                                    <div class="espacios text-center">
                                                                        <h5 class="">{{$perfiles[$i]->name}}</h5>
                                                                        <img width="50px" height="50px" src="{{ $perfiles[$i]->avatar_img }}">
                                                                    </div>
                                                                    <div class="ibox-content text-center">
                                                                    <span>
                                                                          Correo: {{$perfiles[$i]->email}}
                                                                    </span>
                                                                     </div>
                                                              </div>
                                                              @endfor
                                                          </div>
                                             </div>
                            </div>  
                        </div>
              </div>
          </div>
    </div>
</div>

@endsection
