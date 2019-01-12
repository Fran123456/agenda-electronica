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

<div class="">
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


                            <div class=" animated fadeInRight">
                            <div class="mail-box-header">
                                <div class="pull-right tooltip-demo">
                                    <a href="mailbox.html" class="btn btn-white btn-sm" ><i class="fa fa-trash-o"></i> </a>
                                </div>
                                <div class="mail-tools tooltip-demo m-t-md">
                                    <h3>
                                        <span class="font-normal"></span>{{$notificacion->titulo}}
                                    </h3>
                                    <h5>
                                        <span class="pull-right font-normal">{{ $notificacion->created_at }}</span>
                                        <span class="font-normal">Enviado por: </span>{{ $creador->name}}
                                        <br>
                                        <br>
                                        <span class="font-normal">Correo: </span>{{$creador->email}}
                                    </h5>
                                </div>
                            </div>

                           @if($notificacion->tipo_noti == 'generada' or $notificacion->tipo_noti == 'generada-users')
                           <div style="padding-left: 20px;padding-bottom: 20px">
                                  <img height="80" width="80" src="{{asset('yeti-malo.png')}}">DEBES TERMINAR TUS TAREAS
                                  <br>
                                  <br>
                                  <a href="{{route('Tareas.show', $notificacion->tarea_id)}}" class="btn btn-success">Ver tarea</a>
                           </div>


                           @endif

                            @if($notificacion->tipo_noti != 'generada' and $notificacion->tipo_noti != 'generada-users')
                                <div class="mail-box">
                                          <div class="mail-body">
                                            {!! $notificacion->cuerpo !!}
                                          </div>
                                    @if($tarea != "")
                                          <div class="mail-attachment">

                                              <h4>Tarea asignada:</h4>
                                                  <div class="panel panel-primary">
                                                      <div class="panel-heading">
                                                          <h4>{{$tarea->Titulo}}</h4>
                                                      </div>
                                                      <div class="panel-body">
                                                          {!! $tarea->Cuerpo !!}
                                                      </div>
                                                      <div class="panel-footer">
                                                          Fecha finalización: {{ $tarea->fecha_finalizacion}}
                                                      </div>
                                                      <div class="panel-footer">
                                                          Estado: <span class="label label-default">{{ $tarea->estado}}</span>
                                                      </div>
                                                  </div>

                                                 <!-- <div class="well"><H4>COLABORADORES:</H4>

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

                                                  </div>-->

                                          </div>
                                           @endif
                                                  <div class="clearfix"></div>
                                          </div>
                                        @endif
                                      </div>


                        </div>
              </div>
          </div>
    </div>
</div>


@endsection
