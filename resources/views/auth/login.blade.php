@extends('layouts.login_register')

@section('content')

<style media="screen">
    .middle-box {
    max-width: 900px;
    z-index: 100;
    margin: 0 auto;
    padding-top: 130px;
    }

    .loginscreen.middle-box {
          width: 500px;
      }

</style>
  <div class="middle-box text-center loginscreen animated fadeInDown">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div>
                  <h1 class="logo-name">IN+</h1>
              </div>
              <h3>Bienvenido TripSV-panel</h3>

              <form class="m-t" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label  class="">Correo:</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label  class="">Contreaseña:</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>


                  <div class="form-group">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                              </label>
                          </div>
                  </div>

                  <button type="submit" class="btn btn-primary block full-width m-b">Ingresa</button>
              </form>
            </div>
          </div>
      </div>



@endsection
