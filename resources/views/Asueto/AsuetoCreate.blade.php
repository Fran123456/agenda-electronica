@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

             <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Agrega un día de asueto</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" action="{{route('dayOFF.store')}}" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}

                                 <div class="form-group"><label class="col-lg-2 control-label">Fecha:</label>
                                    <div class="col-lg-10">
                                       <div class="" id="">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                              <input type="date" name="fecha" class="form-control" value="">
                                              <input type="text" name="grupo" value="{{Auth::user()->grupo}}" class="form-control" value="">
                                          </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">descripción:</label>
                                    <div class="col-lg-10">
                                        <textarea name="descripcion" rows="8" class="form-control"></textarea>
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
