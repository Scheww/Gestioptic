@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Opticas</span>
            </h1><!-- End Title -->

            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Configuracion</li>
            </ol><!--breadcrum end-->

            <div class="section section-custom billinfo">
                <!--section-title -->
                <h2>Editar optica</h2><!--section-title end -->
                <!-- section content start-->
                <form id="validationForm" action="{{ route('config-optic-update', $optic->id)}}" method="post">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-body">
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="hidden" name="_method" value="put">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Nombre*
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($optic)) value="{{$optic->name}}" @endif name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Ciudad
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($optic->city)) value="{{$optic->city}}" @endif name="city" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Telefono*
                                        </label>
                                        <input type="number" name="phone" id="regular1" @if(!empty($optic->phone)) value="{{$optic->phone}}" @endif class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Email*
                                        </label>
                                        <input type="email" name="email" id="regular1" @if(!empty($optic->email)) value="{{$optic->email}}" @endif class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Direccion*
                                        </label>
                                        <input type="text" name="address" @if(!empty($optic->address)) value="{{$optic->address}}" @endif class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pmd-card-actions">
                            <button  type="submit" class="btn btn-primary next">Guardar</button>
                            <a href="{{route('optic-index')}}" class="btn btn-default">Cancelar</a>
                        </div>
                    </div> <!-- section content end -->
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
                }else if ($('input[name="email"]').val().length > 189 ) {
                    alert('El email debe ser mas corto');
                    return false;
                }else if($.trim($('input[name="name"]').val()) === "") {
                    alert('Debes completar el nombre');
                    return false;
                }else if($.trim($('input[name="phone"]').val()) === "") {
                    alert('Debes completar el telefono');
                    return false;
                }else if ($('input[name="name"]').val().length > 189 ) {
                    alert('El nombre debe ser mas corto');
                    return false;
                }
            });
        });
    </script>
@endsection