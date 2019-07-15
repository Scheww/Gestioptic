@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Productos</span>
            </h1><!-- End Title -->

            <button style=" position: absolute;right: 30px;top: 90px;" class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" href="{{route('product-create')}}"  type="button"><a href="{{route('product-create')}}" ><i class="material-icons pmd-sm">add</i></a></button>
            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Listado de Productos</li>
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
                                    <th>Nombre</th>
                                    <th>Marca</th>
                                    <th>Tipo</th>
                                    <th>Stock</th>
                                    <th>Precio de Compra</th>
                                    <th>Precio de Venta</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($products))
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->brand->name}}</td>
                                            <td>{{$product->productType->name}}</td>
                                            <td>{{$product->stock}}</td>
                                            <td>{{$product->buy_price}}</td>
                                            <td>{{$product->sell_price}}</td>
                                            <td><a href="{{route('product-update', $product->id)}}"><i class="material-icons md-dark pmd-sm">edit</i></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" >No hay productos cargados</td>
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