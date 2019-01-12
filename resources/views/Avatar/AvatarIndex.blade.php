@extends('layouts.app')

@section('content')
<style type="text/css">
    .container {
  padding-right:0px;
  padding-left: 0px;
  margin-right: auto;
  margin-left: auto;
}

#page-wrapper {
  padding: 0 0px;
  min-height: 568px;
  position: relative !important;
}

.product-imitation {
    text-align: center;
    padding-top: 20px;
    padding-bottom: 40px;
    background-color: #f8f8f9;
    color: #bebec3;
    font-weight: 600;
}

.product-desc {
    padding: 3px;
    position: relative;
}
</style>


<div class="container">

    <div>
        @if(session('agregado'))
          <script type="text/javascript">
                     toastr.options = {
                          "closeButton": true,
                          "debug": false,
                          "progressBar": false,
                          "preventDuplicates": false,
                          "positionClass": "toast-top-center",
                          "showDuration": "400",
                          "hideDuration": "1000",
                          "timeOut": "7000",
                          "extendedTimeOut": "1000",
                          "showEasing": "swing",
                          "hideEasing": "linear",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }
                        toastr.success("Agregado correctamente", "Exito");
          </script>
       @endif
    </div>


    <div class="col-md-6 col-ms-6 col-xs-12">
        <h3>Gestión de avatars</h3>
    </div>
    <div class="col-md-6 col-ms-6 col-xs-12 text-right">
        <a  href="{{route('avatar.create')}}" class="btn btn-success">Agrega</a>
        <br>
        <br>
    </div>


@foreach($avatars as $key => $value)
    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="product-imitation">
                                    <img height="100" width="100" src="{{ $value->url }}" alt="">
                                </div>
                                <div class="product-desc">
                                    <span class="product-price">
                                        {{$value->nombre}}
                                    </span>
                                </div>
                            </div>
                        </div>
    </div>
@endforeach

<div class="col-md-12 text-center">
  {{$avatars->render()}}
</div>






 <!--<div class="col-lg-12 col-ms-12 col-xs-12">
               <div class="ibox float-e-margins" >
                        <div class="ibox-content" >
                            <div class="table-responsive">
                              <table class="table table-bordered table-hover table-striped" id="avatar2">

                                  <thead>
                                      <tr class="">
                                          <th width="60">N°</th>
                                          <th width="80">Multimedia</th>
                                          <th>Tipo</th>
                                          <th width="100">Eliminar</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($avatars as $key => $value)
                                      <tr>
                                          <td>{{$key +1}}</td>
                                          <td class="text-center">
                                             <img height="60px" width="60px" src="{{ $value->url }}"></a>
                                          </td>
                                          <td>{{$value->nombre}}</td>
                                          <td>
                                           <button disabled="" type="submit" class="btn btn-sm btn-danger"> Eliminar</button>
                                           </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                            </div>
                        </div>
             </div>
       </div>
-->








</div>



@endsection
