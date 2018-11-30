@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                       
             <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Agrega un avatar</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" action="{{route('avatar.store')}}" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}

                                 <div class="form-group"><label class="col-lg-2 control-label">Nombre:</label>
                                    <div class="col-lg-10">
                                        <input required="" type="text" name="nombre" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-lg-2 control-label">Imagen:</label>
                                    <div class="col-lg-10">
                                        <input required="" type="file" name="url">
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
@endsection
