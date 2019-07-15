@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Recetas</span>
            </h1><!-- End Title -->

            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Formulario de Recetas</li>
            </ol><!--breadcrum end-->

            <div class="section section-custom billinfo">
                <!--section-title -->
                <h2>Cargar Cliente de la receta</h2><!--section-title end -->
                <!-- section content start-->

                <form id="validationForm" action="{{ (empty($recipe->id)) ? route('recipe-store') : route('recipe-edit', $recipe->id)}}" method="post">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-body">
                            <div class="group-fields clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Nombre*
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($recipe->client)) value="{{$recipe->client->name}}" @endif name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Telefono*
                                        </label>
                                        <input type="number" step="1" name="phone" id="regular1" @if(!empty($recipe->client->phone)) value="{{$recipe->client->phone}}" @endif class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Email*
                                        </label>
                                        <input type="email" name="email" id="regular1" @if(!empty($recipe->client->email)) value="{{$recipe->client->email}}" @endif class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            DNI/CUIT
                                        </label>
                                        <input type="text" name="id_number" @if(!empty($recipe->client->id_number)) value="{{$recipe->client->id_number}}" @endif class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="group-fields clearfix row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Direccion*
                                        </label>
                                        <input type="text" name="address" @if(!empty($recipe->user->address)) value="{{$recipe->user->address}}" @endif class="form-control">
                                    </div>
                                </div>
                            </div>
                            <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <span>Cerca</span>
                            </h4>
                            <div id="left-eye-near" style="float: left" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3>
                                    <span>Ojo izquierdo</span>
                                </h3>
                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Cilindrico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_left_eye_near}}" @endif name="esferic_left_eye_near" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Esferico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_left_eye_near}}" @endif name="cilindric_left_eye_near" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="right-eye-near" style="float: right" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3>
                                    <span>Ojo derecho</span>
                                </h3>
                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Cilindrico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_right_eye_near}}" @endif name="esferic_right_eye_near" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 group-fields clearfix row">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Esferico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_right_eye_near}}" @endif name="cilindric_right_eye_near" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($recipe))
                                <input type="hidden" name="_method" value="put">
                            @endif

                            <div class="group-fields clearfix row" >
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Armazon
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($recipe)) value="{{$recipe->near_armazon}}" @endif name="near_armazon" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <h4>
                                <span>Intermedio</span>
                            </h4>

                            <div id="left-eye-intermediate" style="float: left" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Cilindrico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_left_eye_intermediate}}" @endif name="esferic_left_eye_intermediate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Esferico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_left_eye_intermediate}}" @endif name="cilindric_left_eye_intermediate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="right-eye-intermediate" style="float: right" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Cilindrico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_right_eye_intermediate}}" @endif name="esferic_right_eye_intermediate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Esferico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_right_eye_intermediate}}" @endif name="cilindric_right_eye_intermediate" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Armazon
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($recipe)) value="{{$recipe->intermediate_armazon}}" @endif name="intermediate_armazon" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <h4>
                                <span>Lejos</span>
                            </h4>

                            <div id="left-eye-far" style="float: left" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Cilindrico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_left_eye_far}}" @endif name="esferic_left_eye_far" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Esferico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_left_eye_far}}" @endif name="cilindric_left_eye_far" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="right-eye-far" style="float: right" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Cilindrico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_right_eye_far}}" @endif name="esferic_right_eye_far" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div>
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Esferico
                                            </label>
                                            <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->esferic_right_eye_far}}" @endif name="cilindric_right_eye_far" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Armazon
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($recipe)) value="{{$recipe->far_armazon}}" @endif name="far_armazon" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <h4>
                                <span>Extra</span>
                            </h4>

                            <div class="group-fields clearfix row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Eje
                                        </label>
                                        <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->eje}}" @endif name="eje" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Bifocal
                                        </label>
                                        <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->bifocal}}" @endif name="bifocal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Multifocal
                                        </label>
                                        <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->multifocal}}" @endif name="multifocal" class="form-control">
                                    </div>
                                </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="regular1" class="control-label">
                                        Altura
                                    </label>
                                    <input type="number" step=".01" id="regular1" @if(!empty($recipe)) value="{{$recipe->height}}" @endif name="height" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="group-fields clearfix row">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="regular1" class="control-label">
                                        Observaciones
                                    </label>
                                    <textarea name="Observaciones" class="form-control">@if(!empty($recipe)){{$recipe->observations}} @endif</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pmd-card-actions">
                        <button  type="submit" class="btn btn-primary next">Guardar</button>
                        <a href="{{route('recipe-index')}}" class="btn btn-default">Cancelar</a>
                    </div>
                 <!-- section content end -->
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
                }else if($.trim($('input[name="name"]').val()) === "") {
                    alert('Debes completar el nombre');
                    return false;
                }else if($.trim($('input[name="phone"]').val()) === "") {
                    alert('Debes completar el telefono');
                    return false;
                }else if ($('input[name="name"]').val().length > 189) {
                    alert('El nombre debe ser mas chico');
                    return false;
                }else if ($('input[name="email"]').val().length > 189) {
                    alert('El email debe ser mas chico');
                return false;
                }else if ($('input[name="phone"]').val().length > 20) {
                    alert('El telefono debe ser mas chico');
                return false;
                }else if ($('input[name="address"]').val().length > 189) {
                    alert('El telefono debe ser mas chico');
                    return false;
                }else if ($('input[name="id_number"]').val().length > 20) {
                    alert('El DNI debe ser mas chico');
                    return false;
                }
            });
        });
    </script>
@endsection