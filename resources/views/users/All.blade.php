@extends('layouts.app')

@section('content')

    <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                           @if($id == auth::user()->id)
                            <h5>Mi perfil</h5>
                            @else
                             <h5>Bienvenido</h5>
                            @endif
                        </div>
                        <div>
                            <div class="ibox-content border-left-right text-center">
                                <img alt="image" class="" src="{{asset($miProfile->avatar_img)}}">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>{{$miProfile->name}}</strong></h4>
                                <p><i class="fa fa-envelope"></i> {{$miProfile->email}}</p>
                                <div class="row m-t-lg">
                                    <div class="col-md-4">
                                        <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>{{$allTask}}</strong> Total tareas</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>{{$fin}}</strong> Tareas finalizadas</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                        <h5><strong>{{$proceso}}</strong> Tareas en proceso</h5>
                                    </div>
                                </div>
                                <div class="user-button">
                                    <div class="row">
                                      @if($id != auth::user()->id)
                                        <div class="col-md-6">
                                            <a href="{{route('Notificaciones.create')}}"  class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Enviar notificación</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    </div>


                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Días libre</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                                <div class="feed-activity-list">
                                    @foreach($dias as $value)
                                    <div class="feed-element">
                                        <div class="media-body ">
                                            {{$value->descripcion}} - <strong>{{ date("d-m-Y",strtotime($value->fecha))}}</strong> 
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                {{$dias->render()}}
                        </div>
                    </div>

                 @if($id == auth::user()->id)
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Contactos</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                                <div class="feed-activity-list">
                                    @foreach($userschidos as $value)
                                    @if($value->id != Auth::user()->id)
                                    <div class="feed-element">
                                        <a href="#" class="pull-left">
                                            <img alt="image" class="img-circle" src="{{$value->avatar_img}}">
                                        </a>
                                        <div class="media-body ">
                                            {{$value->name}}<br>
                                            {{$value->email}}<a href="{{route('Perfil.show', $value->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-user" aria-hidden="true"></i>Ver</a>

                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                                {{$userschidos->render()}}
                        </div>
                    </div>
                    @endif
                </div>



            </div>
        </div>
@endsection
