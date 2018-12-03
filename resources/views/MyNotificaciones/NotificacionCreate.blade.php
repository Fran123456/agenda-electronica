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
                              {{ csrf_field() }}
                                <div class="form-group">
                                   <label class="col-lg-2 control-label">Titulo:</label>
                                    <div class="col-lg-10">
                                           <input required type="text" name="titulo" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Mensaje de notificación:</label>
                                     <div class="col-lg-10">
                                        <textarea required name="mensaje" class="form-control" rows="8" required></textarea>
                                     </div>
                                  </div>
                                 <div class="form-group">
                                   <label class="col-lg-2 control-label">Usuarios a enviar:</label>
                                    <div class="col-lg-10">
                                              <select required id="select" required class="form-control" name="users[]" multiple>

                                              </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-lg-12 text-center">
                                      <br>
                                          <button class="btn btn-success" type="submit">Enviar</button>
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
