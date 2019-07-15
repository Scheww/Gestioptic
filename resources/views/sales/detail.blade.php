@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Ventas</span>
            </h1><!-- End Title -->

            <button style=" position: absolute;right: 30px;top: 90px;" class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" href="{{route('sales')}}"  type="button"><a href="{{route('sales')}}" ><i class="material-icons pmd-sm">add</i></a></button>
            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Listado de Ventas</li>
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
                                    <th>Cliente</th>
                                    <th>Forma de pago</th>
                                    <th>Fecha</th>
                                    <th>Monto</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($budgets))
                                    @foreach($budgets as $budget)
                                        <tr>
                                            <td>{{$budget->client->name}}</td>
                                            <td>{{$budget->payment_form}}</td>
                                            <td>{{$budget->created_at}}</td>
                                            <td>{{$budget->amount}}</td>
                                            <td><a href="{{route('sales-update', $budget->id)}}"><!--<i class="material-icons md-dark pmd-sm">edit</i>--></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" >No hay budgetos cargados</td>
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
    </script>
@endsection