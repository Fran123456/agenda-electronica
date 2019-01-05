@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

             <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Cambia contraseña al usuario: {{$user->name}}</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal" action="{{route('updatePassword' , $id)}}" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}

                                 <div class="col-md-12 text-center">
                                   <h4>Información del usuario</h4>
                                   <img height="60" height="60" src="{{$user->avatar_img}}" alt="">
                                   <br>
                                   {{$user->email}}
                                   <br>
                                   {{$user->name}}
                                   <br>
                                   {{$user->rol}}
                                   <br>
                                   <br>
                                 </div>

                                 <div class="form-group"><label class="col-lg-2 control-label">contraseña:</label>
                                    <div class="col-lg-10">
                                       <div class="" id="">
                                          <div class="input-group date">
                                              <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                                              <input type="password" name="pass" class="form-control" value="">
                                          </div>
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-sm btn-success" type="submit">Actualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                 </div>
        </div>
    </div>
</div>

@endsection
