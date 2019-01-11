<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>mobile</title>

    <!-- Styles -->


  <!--PLANTILLA---------------------------------------------------------------------->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">


    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

<!--PLANTILLA------------------------------------------------------------------------>


</head>
<style media="screen">
.body{
  background-image: url("login2/login.jpg");
  background-repeat: no-repeat;
background-position: 50% 50%;
}
</style>
<body class="body">


  @yield('content')

<!--PLANTILLA----------------------------------------------->

<!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

<!--PLANTILLA----------------------------------------------->



</body>
</html>
