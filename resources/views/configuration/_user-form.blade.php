@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Usuarios</span>
            </h1><!-- End Title -->

            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Formulario de Usuarios</li>
            </ol><!--breadcrum end-->

            <div class="section section-custom billinfo">
                <!--section-title -->
                <h2>@if(empty($user_config))Crear Usuario @else Editar Usuario @endif</h2><!--section-title end -->
                <!-- section content start-->
                <form id="validationForm" method="post" action="{{ (empty($user_config->id)) ? route('config-user-store') : route('config-user-update', $user_config->id)}}">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    @if(!empty($user_config))
                                        <input type="hidden" name="_method" value="put">
                                    @endif
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Nombre*
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($user_config)) value="{{$user_config->name}}" @endif name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Email*
                                        </label>
                                        <input type="email" name="email" id="regular1" @if(!empty($user_config->email)) value="{{$user_config->email}}" @endif class="form-control">
                                    </div>
                                </div>
                                @if(empty($user_config))
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Contraseña*
                                        </label>
                                        <input type="password" name="password" id="regular1" class="form-control">
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="pmd-card-actions">
                                <button  user="submit" class="btn btn-primary next">Guardar</button>
                                <a href="{{route('config-users')}}" class="btn btn-default">Cancelar</a>
                            </div>
                        </div> <!-- section content end -->
                    </div>
                </form>
            </div>
        </div> <!-- section content end -->
    </div>
    <script>
        $(document).ready(function () {
            $('#validationForm').submit(function() {
                if ($.trim($('input[type="email"]').val()) === "" ) {
                    alert('Debes completar el email');
                    return false;
                }else if ($('input[name="email"]').val().length > 189) {
                    alert('El Email debe ser mas pequeño');
                    return false;
                }else if($.trim($('input[name="name"]').val()) === "") {
                    alert('Debes completar el nombre');
                    return false;
                }else if ($('input[name="name"]').val().length > 189) {
                    alert('El name debe ser mas pequeño');
                    return false;
                }
            });
        });
    </script>
@endsection