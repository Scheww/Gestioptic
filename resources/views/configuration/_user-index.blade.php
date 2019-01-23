@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Usuarios</span>
            </h1><!-- End Title -->

            <button style=" position: absolute;right: 30px;top: 90px;" class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" type="button"><a href="{{route('config-user-form')}}" ><i class="material-icons pmd-sm">add</i></a></button>
            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Usuarios</li>
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
                                    <th style="width: 45%">Name</th>
                                    <th style="width: 45%">Email</th>
                                    <th style="width: 5%"></th>
                                    <th style="width: 5%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($users_config->count() > 0)
                                    @foreach($users_config as $user_config)
                                        <tr>
                                            <td>{{$user_config->name}}</td>
                                            <td>{{$user_config->email}}</td>
                                            <td>
                                                <form method="post" id="delete-form-{{$user_config->id}}" action="{{route('config-user-update', $user_config->id)}}">
                                                    <input type="hidden" name="_method" value="delete">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                </form>
                                                <a onclick="deleteEntity('#delete-form-{{$user_config->id}}')"><i class="material-icons md-dark pmd-sm">delete</i></a>
                                            </td>
                                            <td><a href="{{route('config-user-update', $user_config->id)}}"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" >No hay Usuarios cargadas</td>
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
        function deleteEntity(form) {
            console.log('llega')
            $(form).submit();
        }
    </script>
@endsection