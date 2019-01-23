@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">

        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Productos</span>
            </h1><!-- End Title -->

            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Formulario de Productos</li>
            </ol><!--breadcrum end-->

            <div class="section section-custom billinfo">
                <!--section-title -->
                <h2>Basic Crear Producto</h2><!--section-title end -->
                <!-- section content start-->
                <form id="validationForm" action="{{ (empty($product->id)) ? route('product-store') : route('product-edit', $product->id)}}" method="post">
                    <div class="pmd-card pmd-z-depth">
                        <div class="pmd-card-body">
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    @if(!empty($product))
                                        <input type="hidden" name="_method" value="put">
                                    @endif
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">
                                            Nombre*
                                        </label>
                                        <input type="text" @if(!empty($product)) value="{{$product->name}}" @endif  name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">
                                            Code
                                        </label>
                                        <input type="text" @if(!empty($product->code)) value="{{$product->code}}"  @endif name="code" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">
                                            Stock
                                        </label>
                                        <input type="number" name="stock" @if(!empty($product->stock)) value="{{$product->stock}}"  @endif class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">
                                            Color
                                        </label>
                                        <input type="text" name="color" @if(!empty($product->color)) value="{{$product->color}}" @endif class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">
                                            Precio de compra
                                        </label>
                                        <input type="number" name="buy_price" @if(!empty($product->buy_price)) value="{{$product->buy_price}}" required="required" @endif class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">
                                            Precio de venta
                                        </label>
                                        <input type="number" name="sell_price" @if(!empty($product->sell_price)) value="{{$product->sell_price}}" @endif class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Marca</label>
                                <select class="select-simple form-control pmd-select2" name="brand_id">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" @if(!empty($product) && ($product->brand_id == $brand->id)) selected @endif>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Tipo de producto</label>
                                <select class="select-simple form-control pmd-select2" name="type_id">
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}" @if(!empty($product) && ($product->type_id == $type->id)) selected @endif>{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                        <label class="control-label">
                                            Descripción*
                                        </label>
                                        <input type="text" name="description" @if(!empty($product->description)) value="{{$product->description}}" @endif class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pmd-card-actions">
                            <button  type="submit" class="btn btn-primary next">Guardar</button>
                            <a href="{{route('product-index')}}" class="btn btn-default">Cancelar</a>
                        </div>
                    </div> <!-- section content end -->
                </form>
            </div>
        </div> <!-- section content end -->
    </div>
    <script>
        $(document).ready(function () {
            $('#validationForm').submit(function() {
               if($.trim($('input[name="name"]').val()) === "") {
                    alert('Debes completar el nombre');
                    return false;
                }else if ($('input[name="name"]').val().length > 189) {
                   alert('El nombre debe ser mas pequeño');
                    return false;
               }else if($.trim($('input[name="code"]').val()) === "") {
                   alert('Debes completar el codigo');
                    return false;
                }else if ($('input[name="code"]').val().length > 189) {
                   alert('El codigo debe ser mas pequeño');
                    return false;
               }else if($.trim($('input[name="buy_price"]').val()) === "" || $('input[name="buy_price"]').val() < 1) {
                   alert('Debes completar el precio de compra');
                   return false;
               }else  if ($('input[name="buy_price"]').val().length > 10) {
                   alert('El precio de venta debe ser mas chico');
                   return false;
               } else if($.trim($('input[name="sell_price"]').val()) === "" || $('input[name="sell_price"]').val() < 1) {
                   alert('Debes completar el precio de venta');
                   return false;
               }else if ($('input[name="sell_price"]').val().length > 10) {
                   alert('El precio de compra debe ser mas chico');
                    return false;
               }else if ($('input[name="stock"]').val().length > 10) {
                   alert('El stock debe ser mas chico');
                   return false;
               }else if ($.trim($('input[name="stock"]').val()) === "") {
                   alert('debe cargar el stock');
                   return false;
               } else if($('input[name="sell_price"]').val() <= $('input[name="buy_price"]').val()) {
                   alert('Los precios de venta deben ser mayores a los precios de compra');
                   return false;
               }
            });
        });
    </script>
@endsection