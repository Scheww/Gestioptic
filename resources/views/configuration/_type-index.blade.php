@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Tipos</span>
            </h1><!-- End Title -->

            <button style=" position: absolute;right: 30px;top: 90px;" class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" type="button"><a href="{{route('config-type-form')}}" ><i class="material-icons pmd-sm">add</i></a></button>
            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Tipos</li>
            </ol><!--breadcrum end-->

            <div class="col-md-12">
                <div class="component-box">

                    <!-- Basic Bootstrap Table example -->
                    <div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                            <table cellspacing="0" cellpadding="0" class="table" id="table-bootstrap">
                                <div class="search-paper pmd-textfield">
                                    <div id="example-checkbox_filter" class="dataTables_filter">
                                        <label style="margin: 15px;">
                                            <input type="search" class="form-control input-sm" placeholder="Search" aria-controls="example-checkbox">
                                        </label>
                                    </div>
                                </div>
                                <thead>
                                <tr>
                                    <th style="width: 90%">Name</th>
                                    <th style="width: 5%"></th>
                                    <th style="width: 5%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($types->count() > 0)
                                    @foreach($types as $type)
                                        <tr>
                                            <td>{{$type->name}}</td>
                                            <td>
                                                <form method="post" id="delete-form-{{$type->id}}" action="{{route('config-type-update', $type->id)}}">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                </form>
                                                <a style="cursor: pointer" onclick="deleteEntity('#delete-form-{{$type->id}}')"><i class="material-icons md-dark pmd-sm">delete</i></a>
                                            </td>
                                            <td><a href="{{route('config-type-update', $type->id)}}"><i class="material-icons md-dark pmd-sm">edit</i></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" >No hay Tipos cargadas</td>
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
    <script>
        function deleteEntity(form) {
            console.log('llega')
            $(form).submit();
        }
        $(document).ready(function () {
            $('input[type="search"]').keypress(function (e) {
                console.log(e.key)
                if (e.key == 'Enter' && $('input[type="search"]').val().length > 0 ){
                    @if(!empty(request()->input('s')))
                        window.location.href = window.location.href.replace('s={{request()->input('s')}}', 's='+$('input[type="search"]').val())
                    @else
                        window.location.href = window.location.href + '?s=' +$('input[type="search"]').val()
                    @endif
                }
            })
        })
    </script>
@endsection