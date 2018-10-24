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
                <li class="active">Formulario de Opticas</li>
            </ol><!--breadcrum end-->

            <div class="section section-custom billinfo">
                <!--section-title -->
                <h2>Basic Crear Optica</h2><!--section-title end -->
                <!-- section content start-->
                <form id="validationForm" action="{{ (empty($user->id)) ? route('optic-store') : route('optic-edit', $user->id)}}" method="post">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-body">
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    @if(!empty($user))
                                        <input type="hidden" name="_method" value="put">
                                    @endif
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Nombre*
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($user)) value="{{$user->name}}" @endif name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Ciudad
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($user->city)) value="{{$user->city}}" @endif name="city" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Telefono*
                                        </label>
                                        <input type="number" name="phone" id="regular1" @if(!empty($user->phone)) value="{{$user->phone}}" @endif class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Email*
                                        </label>
                                        <input type="email" name="email" id="regular1" @if(!empty($user->email)) value="{{$user->email}}" @endif class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Direccion*
                                        </label>
                                        <input type="text" name="address" @if(!empty($user->address)) value="{{$user->address}}" @endif class="form-control">
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
@endsection