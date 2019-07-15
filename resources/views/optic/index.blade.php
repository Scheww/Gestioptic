@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Opticas</span>
            </h1><!-- End Title -->

            <button style=" position: absolute;right: 30px;top: 90px;" class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" type="button"><a href="{{route('optic-create')}}" ><i class="material-icons pmd-sm">add</i></a></button>
            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Listado de Opticas</li>
            </ol><!--breadcrum end-->

            <div class="col-md-12">
                <div class="component-box">

                    <!-- Basic Bootstrap Table example -->
                    <div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                            <table cellspacing="0" cellpadding="0" class="table" id="table-bootstrap">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Telefono</th>
                                    <th>Timesheet</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($optics))
                                    @foreach($optics as $optic)
                                        <tr>
                                            <td>{{$optic->name}}</td>
                                            <td>{{$optic->city}}</td>
                                            <td>{{$optic->phone}}</td>
                                            <td>{{$optic->created_at}}</td>
                                            <td><a href="{{route('optic-update', $optic->id)}}"><i class="material-icons md-dark pmd-sm">edit</i></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" >No hay opticas cargadas</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            </div> <!-- Basic Bootstrap Table example end-->
        </div>
    </div>
@endsection