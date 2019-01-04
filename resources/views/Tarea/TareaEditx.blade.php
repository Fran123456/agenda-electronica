@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('')}}">
<script src="{{asset('ckeditor/ckeditor.js')}}">

</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">

             <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><i class="fa fa-thumb-tack" aria-hidden="true"></i> Editar una tarea</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" action="{{route('programarTask', $tarea->codigo_tarea)}}" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Título:</label>
                                    <div class="col-lg-10">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                              <input  type="text" name="titulo" value="{{$tarea->Titulo}}" required class="form-control" value="">
                                          </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                   <label class="col-lg-2 control-label">Fecha finalización:</label>
                                    <div class="col-lg-4">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                              <input type="date" name="fecha" value="{{$tarea->fecha_finalizacion}}" required class="form-control" value="">
                                          </div>
                                    </div>

                                    <label class="col-lg-2 control-label">Estado:</label>
                                     <div class="col-lg-4">
                                           <div class="input-group date">
                                               <span class="input-group-addon"><i class="fa fa-check-circle-o" aria-hidden="true"></i></i></span>
                                               <select name="estado" class="form-control">
                                                 <option value="Inicio">Inicio</option>
                                                 <option value="Proceso">Proceso</option>
                                                 <option value="Proceso">Finalizado</option>
                                               </select>
                                           </div>
                                     </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Descripción:</label>
                                    <div class="col-lg-10">
                                        <textarea id="editor1" required name="descripcion" rows="8" class="form-control">{{$tarea->Cuerpo}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Usuarios asignados:</label>
                                    <div class="col-lg-10">
                                              <select size="7"   required class="form-control" name="users[]" multiple>
                                                 @foreach($users  as $key => $value)
                                                    @for($i = 0; $i< count($usersA); $i++)
                                                        @if($usersA[$i]['user_id'] == $value->id)
                                                          {{ $soldado = 1}}
                                                          @break
                                                        @else
                                                          {{ $soldado = 0}}
                                                        @endif
                                                    @endfor

                                                        @if($soldado == 1)
                                                          <option selected="" value="{{$value->id}}">{{$value->name}}</option>
                                                        @else
                                                          <option  value="{{$value->id}}">{{$value->name}}</option>
                                                        @endif
                                                 @endforeach
                                              </select>
                                    </div>
                                 </div>

                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Mensaje de notificación:</label>
                                     <div class="col-lg-10">
                                        <textarea name="mensaje" class="form-control" rows="8" required>La tarea ha sido modificada
                                        </textarea>
                                     </div>
                                  </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-success" type="submit">Editar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                 </div>
        </div>
    </div>
</div>
<script type="text/javascript">
   CKEDITOR.replace( 'editor1' );
</script>



@endsection
