@extends('layouts.app')

@section('content')

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

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
                                      
                            <div class=" animated fadeInRight">

                                <div class="mail-box">
                                    @if($tarea != "")
                                          <div class="mail-attachment">
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
                                                          {{$cont ='Estado'}}: <span class="label label-default">{{ $tarea->estado}}</span>
                                                      </div>
                                                  </div>
                                               
                                                  <div class="well"><H4>INTEGRANTES</H4>
                                                      
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
                                                                    <span>
                                                                          COLABORADOR 
                                                                          @if($perfiles[$i]->id == $jefe->id)
                                                                            {{ $cont = '/'}}
                                                                              ASIGNO TAREA
                                                                            
                                                                          @endif
                                                                    </span>
                                                                     </div>
                                                              </div>
                                                            @endfor
                                                             @if($cont != '/')
                                                              <div class="col-md-3 bordes">
                                                                    <div class="espacios text-center">
                                                                        <h5 class="">{{$jefe->name}}</h5>
                                                                        <img width="50px" height="50px" src="{{ $jefe->avatar_img }}">
                                                                    </div>
                                                                    <div class="ibox-content text-center">
                                                                    <span>
                                                                          Correo: {{$jefe->email}}
                                                                    </span>
                                                                    <span>
                                                                          ASIGNO TAREA
                                                                    </span>
                                                                     </div>
                                                              </div>
                                                              @endif
                                                              
                                                          </div>
                                                        </div>                                                        

                                                  </div>

                                          </div>
                                           @endif
                                                  <div class="clearfix"></div>
                                          </div>
                                      </div>


                        </div>
              </div>
          </div>
    </div>
</div>



@endsection
