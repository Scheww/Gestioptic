@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Marcas</span>
            </h1><!-- End Title -->

            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Formulario de Marcas</li>
            </ol><!--breadcrum end-->

            <div class="section section-custom billinfo">
                <!--section-title -->
                <h2>@if(empty($brand))Crear Marca @else Editar Marca @endif</h2><!--section-title end -->
                <!-- section content start-->
                <form id="validationForm" method="post" action="{{ (empty($brand->id)) ? route('config-brand-store') : route('config-brand-update', $brand->id)}}">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    @if(!empty($brand))
                                        <input type="hidden" name="_method" value="put">
                                    @endif
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label for="regular1" class="control-label">
                                            Nombre*
                                        </label>
                                        <input type="text" id="regular1" @if(!empty($brand)) value="{{$brand->name}}" @endif name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="pmd-card-actions">
                                <button  type="submit" class="btn btn-primary next">Guardar</button>
                                <a href="{{route('config-brands')}}" class="btn btn-default">Cancelar</a>
                            </div>
                        </div> <!-- section content end -->
                    </div>
                </form>
            </div>
        </div> <!-- section content end -->
    </div>
@endsection