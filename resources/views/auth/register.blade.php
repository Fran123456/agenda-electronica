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

                <div class="panel-heading">Registrate <div class="text-right" ><a href="{{route('login')}}"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></div></div>
                <div class="panel-body">
                  <div class="">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <img height="110" width="110" src="{{asset('yeti.png')}}" alt="">
                      </div>

                    </div>
                  </div>

                  <br>
                      <br>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma contraseña</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Codigo de tu grupo</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="grupo" value="{{$codigo}}" readonly required>
                                <input  type="hidden" class="form-control" name="rol" value="super" readonly required>
                                <input  type="hidden" class="form-control" name="soldado" value="si" >
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrate
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
