<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->


  <!--PLANTILLA---------------------------------------------------------------------->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">


    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/steps/jquery.steps.css')}}" rel="stylesheet">
<!--PLANTILLA------------------------------------------------------------------------>


</head>
<style media="screen">
.bodyx{
  background-image: url("login2/login.jpg");
  background-repeat: no-repeat;
background-position: 50% 50%;
}

.wizard > .content > .body {
    float: left;
    position: absolute;
    width: 95%;
    height: 95%;
    padding: 1%;
}
</style>
<body class="bodyx">

  <!-- Mainly scripts -->
      <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="js/plugins/steps/jquery.steps.min.js"></script>
  <!--PLANTILLA----------------------------------------------->

  @yield('content')

<!--PLANTILLA----------------------------------------------->





</body>
</html>
