@extends('layouts.login_register')

@section('content')
  <style media="screen">
    .colorV{
      color: #1ab394;
    }
  </style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <br>
          <br>
            <div class="panel panel-default">

                <div class="panel-heading">Ingresa el codigo del grupo</div>
                <div class="panel-body">
                  <div class="">

                   @if(session('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Error, el codigo no existe.
                    </div>
                   @endif

                    <div class="row">
                      <div class="col-md-4 text-right">
                        <img height="110" width="110" src="{{asset('yeti.png')}}" alt="">
                      </div>
                      <div class="col-md-8 text-left">
                        <br><br>
                        <a class=" btn btn-primary" href="#" class=""><i class="fa fa-users" aria-hidden="true"></i> Registra un grupo</a>
                      </div>
                      <br>
                      <br>
                    </div>
                  </div>

                    <form class="form-horizontal" method="POST" action="{{ route('register_code') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Codigo de grupo</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="codigo" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Continuar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
