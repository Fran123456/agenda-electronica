@extends('layouts.install')

@section('content')
<link rel="stylesheet" href="login2/style.css">
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
      .d{
        margin-top:  300px;
      }


    form {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    display: block;
    width: 100%;
    max-width: 500px;
    background-color: #FFF;
    margin: 0;
    padding: 2.25em;
    box-sizing: border-box;
    border: solid 1px #DDD;
    border-radius: .5em;
    font-family: 'Source Sans Pro', sans-serif;
}


form button {
    display: block;
    margin: 0;
    padding: .65em 1em 1em;
    background-color: #4b647c;
    border: none;
    border-radius: 4px;
    box-sizing: border-box;
    box-shadow: none;
    width: 100%;
    height: 65px;
    font-size: 1.55em;
    color: #FFF;
    font-weight: 600;
    font-family: inherit;
    transition: background-color .2s ease-out;
}


form input[type='email'], form input[type="text"], form input[type='password'] {
    display: block;
    margin: 0;
    padding: 0 1em 0;
    background-color: #f3fafd;
    border: solid 2px #4b647c;
    border-radius: 4px;
    -webkit-appearance: none;
    box-sizing: border-box;
    width: 100%;
    height: 40px;
    font-size: 1.0em;
    color: #4b647c;
    font-weight: 600;
    font-family: inherit;
    transition: box-shadow .2s linear, border-color .25s ease-out;
}


form input[type='email']:focus, form input[type="text"]:focus, form input[type='password']:focus {
  outline: none;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
  border: solid 2px #1ab369;
}

form label {
    margin: 0 0 5px;
    display: block;
    font-size: 1.25em;
    color: #3d5062;
    font-weight: 700;
    font-family: inherit;
}

form button:hover, form button:active {
  background-color: #1ab369;
}
</style>

<script>
    $(document).ready(function(){
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18)
                {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18)
                {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("previous");
                }


            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
                    errorPlacement: function (error, element)
                    {
                        element.before(error);
                    },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    }
                });
   });






</script>





<div class="container">
  <div class="row">
    <div class="col-md-12">

      <br><br><br><br>
      <div class="ibox-content">
        <div class="text-center">
          <img height="150" width="150" src="{{asset('yeti.png')}}" alt="">
            <p>
                YETI-TASK
            </p>
        </div>
        <hr>
        <br>

          <div id="wizard">
              <h1>Tipos de usuario</h1>
              <div class="step-content">
                  <div class="text-center m-t-md">
                  <p>
                      La aplicación contiene 3 tipos de usuarios, soporte, super usuario y usuario de tarea

                  </p>
                  </div>
              </div>

              <h1>Usuario de soporte</h1>
              <div class="step-content">
                  <div class="text-center m-t-md">
                      <p>
                        El usuario de soporte es el encargado de iniciar la aplicación y es el medio por el cual podra crear los demas usuarios.

                      </p>
                  </div>
              </div>

              <h1>Datos de usuario soporte</h1>
              <div class="step-content">
                  <div class="text-center m-t-md">
                      <p>
                        correo: support@yetitask.djfrankremixer.com <br> contraseña: soporte <br>
                        <a class="btn btn-info" href="{{route('listo')}}">Listo</a>
                      </p>
                  </div>
              </div>
          </div>
      </div>


    </div>
  </div>
</div>




<script type="text/javascript">
function eje(){
  if ($("a").text() =="Finish") {
  alert("ha");
  }
}
</script>










@endsection
