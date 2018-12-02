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
                            <h5><i class="fa fa-thumb-tack" aria-hidden="true"></i> Nueva tarea</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" action="{{route('Tareas.store')}}" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Título:</label>
                                    <div class="col-lg-10">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                              <input type="text" name="titulo" value="{{ old('titulo') }}" required class="form-control" value="">
                                          </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                   <label class="col-lg-2 control-label">Fecha finalización:</label>
                                    <div class="col-lg-4">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                              <input type="date" name="fecha" required class="form-control" value="">
                                          </div>
                                    </div>

                                    <label class="col-lg-2 control-label">Estado:</label>
                                     <div class="col-lg-4">
                                           <div class="input-group date">
                                               <span class="input-group-addon"><i class="fa fa-check-circle-o" aria-hidden="true"></i></i></span>
                                               <input type="text" readonly   name="estado" value="Inicio" class="form-control">
                                           </div>
                                     </div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Descripción:</label>
                                    <div class="col-lg-10">
                                        <textarea id="editor1" required name="descripcion" rows="8" class="form-control"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Usuarios asignados:</label>
                                    <div class="col-lg-10">
                                              <select id="select" required class="form-control" name="users[]" multiple>

                                              </select>
                                    </div>
                                 </div>

                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Mensaje de notificación:</label>
                                     <div class="col-lg-10">
                                        <textarea name="mensaje" class="form-control" rows="8" required></textarea>
                                     </div>
                                  </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-success" type="submit">Crear tarea</button>
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

<script type="text/javascript">
/*$.ajax({
   type: 'ajax',
   method: 'post',
   url: 'bodega_Controller/get_codigos',
   data: {dato: dato},
   async: false,
   dataType: 'json',
   success: function(data){
   },
   error: function(){
       alert("error");
   }
});*/

var html = "";
$.ajax({
   type: 'ajax',
   method: 'get',
   url: '{{route('listarUsers')}}',
   async: false,
   dataType: 'json',
   success: function(data){
    for (var i = 0; i < data.length; i++) {
      html = html + '<option value="'+data[i].id+'">'+data[i].name+'</option>';
    }
    console.log(html);
    $('#select').append(html);
   },
   error: function(){
       alert("error");
   }
});
</script>

@endsection
