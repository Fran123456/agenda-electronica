@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

             <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Agrega un usuario</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" action="{{route('Perfil.store')}}" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}

                                 <div class="form-group"><label class="col-lg-2 control-label">Nombre:</label>
                                    <div class="col-lg-10">
                                       <div class="" id="">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                              <input required="" type="text" name="name" class="form-control" value="">
                                          </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">Correo:</label>
                                    <div class="col-lg-10">
                                       <div class="" id="">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                              <input required="" type="text" name="name" class="form-control" value="">
                                          </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">Contraseña:</label>
                                    <div class="col-lg-10">
                                       <div class="" id="">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                                              <input required="" type="text" name="name" class="form-control" value="">
                                          </div>
                                      </div>
                                    </div>
                                </div>

                                


                                

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-success" type="submit">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                 </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{asset('css/plugins/datapicker/datepicker3.css')}}">
<script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
$('#data_1 .input-group.date').datepicker({
    todayBtn: "linked",
    keyboardNavigation: false,
    forceParse: false,
    calendarWeeks: true,
    autoclose: true
});
</script>
@endsection
