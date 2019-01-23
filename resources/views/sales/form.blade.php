@extends('layouts.app')
@section('content')
    <div id="content" class="pmd-content inner-page">
        <style>
            .search-item {
                padding: 15px;
                color: #827e7e;
                font-weight: 600;
                float: left;
                position: relative;
                cursor: pointer;
                width: 100%;
            }
        </style>
        <!--tab start-->
        <div class="container-fluid full-width-container">

            <!-- Title -->
            <h1 class="section-title" id="services">
                <span>Ventas</span>
            </h1><!-- End Title -->

            <!--breadcrum start-->
            <ol class="breadcrumb text-left">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li class="active">Formulario de Ventas</li>
            </ol><!--breadcrum end-->

            <div class="section section-custom billinfo">
                <!--section-title -->
                <h2>Cargar Venta</h2><!--section-title end -->
                <!-- section content start-->
                <form id="validationForm" action="{{route('sales-store')}}" method="post">
                    <div class="pmd-card pmd-z-depth">
                        <div class="group-fields clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="regular1" class="control-label">
                                        Nombre*
                                    </label>
                                    <input type="text" @if(!empty($user)) value="{{$user->name}}" @endif name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="regular1" class="control-label">
                                        DNI/CUIT
                                    </label>
                                    <input type="text" name="address" @if(!empty($user->address)) value="{{$user->address}}" @endif class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="regular1" class="control-label">
                                        Telefono*
                                    </label>
                                    <input type="number" name="phone" @if(!empty($user->phone)) value="{{$user->phone}}" @endif class="form-control">
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="regular1" class="control-label">
                                        Email*
                                    </label>
                                    <input type="email" name="email" @if(!empty($user->email)) value="{{$user->email}}" @endif class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                    <label for="regular1" class="control-label">
                                        Direccion*
                                    </label>
                                    <input type="text" name="address" @if(!empty($user->address)) value="{{$user->address}}" @endif class="form-control">
                                </div>
                            </div>
                            <div class="form-group pmd-textfield pmd-textfield-floating-label col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Tipo de producto</label>
                                <select class="select-simple form-control pmd-select2" name="payment_form">
                                    <option value="1">Ticket Fiscal</option>
                                    <option value="2">Efectivo</option>
                                    <option value="3">Factura A</option>
                                    <option value="4">Factura B</option>
                                </select>
                            </div>
                        </div>
                        <div class="products col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="search-product" style="position: relative;width: 90%;margin: 10px 5%">
                                <input type="text" id="query" name="search" autocomplete="off" placeholder="Busque sus productos aqui" class="form-control">
                                <div class="search-autocomplete" style="width: 100%;-webkit-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.75);box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.75);  position: absolute;
            background-color: white;
            max-height: 150px;
            overflow: hidden;
            overflow-y: auto;
            z-index: 5;">
                                    <div class="search-autocomplete-all">

                                    </div>
                                </div>
                            </div>
                            <div class="item-list" style="position: relative;min-height: 100px; width: 100%;margin: 10px 0;border: 1px solid #ccc">

                            </div>
                        </div>
                        <div class="total-price col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <input name="amount" type="number" style="float: right" required="required" placeholder="total">
                        </div>
                        <div class="pmd-card-actions">
                            <button  type="submit" class="btn btn-primary next">Guardar</button>
                            <a href="{{route('sales-index')}}" class="btn btn-default">Cancelar</a>
                        </div>
                    </div> <!-- section content end -->
                </form>
            </div>
        </div> <!-- section content end -->
    </div>
    <style>
        .search-item{
            padding: 15px;
            color: #827e7e;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
        }
    </style>
    <script>

        $( document ).ready(function() {
            $('#validationForm').submit(function() {
                if ($.trim($('input[type="email"]').val()) === "" ) {
                    alert('Debes completar el email');
                    return false;
                }else if ($('input[name="email"]').val().length > 189) {
                    alert('El Email debe ser mas pequeño');
                    return false;
                }else if($.trim($('input[name="name"]').val()) === "") {
                    alert('Debes completar el nombre');
                    return false;
                }else if ($('input[name="name"]').val().length > 189) {
                    alert('El nombre debe ser mas pequeño');
                    return false;
                }else if($.trim($('input[name="phone"]').val()) === "") {
                    alert('Debes completar el telefono');
                    return false;
                }else if ($('input[name="phone"]').val().length > 20) {
                    alert('El telefono debe ser mas pequeño');
                    return false;
                }else if ($('input[name="amount"]').val() <= 0 || $('input[name="amount"]').val() == '') {
                    alert('El total debe ser mayor a 0');
                    return false;
                }else if ($('input[name="amount"]').val().length > 10 ) {
                        alert('El total no puede ser tan grande');
                        return false;
                }else if ($('.item-list').find('.item').length < 1) {
                    alert('Debe agregar un Producto a su factura');
                    return false;
                }
            });

            $("body").click(function () {
                $('#query').val('');
                $('.search-autocomplete-all').empty();
            })

            $('input[name="search"]').keyup(function (e) {

                if($(this).val().length > 2){
                    var query = $(this);
                    $('.search-list').show();
                    $.ajax({
                        type: 'GET',
                        url: '{{route('product-index')}}/search/'+ query.val()
                    }).done(function (callBack) {

                        if (callBack) {
                            $(callBack).each(function (index, element) {
                              $('.search-list').append('<div class="search-item" onclick="addItem('+element.id+')">'+element.name+'</div>')
                            })
                        }else {

                        }
                    })
                }
            })
        })

        function autocomplete(element) {
            var search = document.getElementsByClassName('search')[0];
            var searchAutocomplete = document.getElementsByClassName('search-autocomplete')[0];
            var searchAutocompleteAll = document.getElementsByClassName('search-autocomplete-all')[0];
            var value_old = '';

            element.onfocus = function (event) {
                element.value = '';

                searchAutocomplete.classList.add('categories');

                if (event.target.value !== '') {
                    searchAutocomplete.classList.add('all');
                } else {
                    searchAutocomplete.classList.remove('all');
                }
            }

            element.onkeyup = function (event) {
                var value = event.target.value.toLowerCase().trim();

                if (value === value_old) {
                    return;
                }

                if (event.keyCode == 27){
                    document.getElementById('query').value = '';
                    value = '';
                }


                if (value !== '') {
                    searchAutocomplete.classList.add('all');
                } else {
                    searchAutocomplete.classList.remove('all');
                }

                var items = searchAutocompleteAll.querySelectorAll('a');

                for (var i = 0; i < items.length; i++) {
                    if (!items[i].classList.contains('category')) {
                        var item = items[i];

                        item.remove();
                    }
                }

                if (value.length > 0) {
                    var value = element.value.toLowerCase().trim();
                    var array = value.split(' ');

                    items = searchAutocompleteAll.querySelectorAll('a');

                    for (var i = 0; i < items.length; i++) {
                        var quantity = 0;

                        if (items[i].classList.contains('category')) {
                            for (var j = 0; j < array.length; j++) {
                                if (items[i].dataset.value.toLowerCase().trim().indexOf(array[j]) !== -1) {
                                    quantity++;
                                };
                            }

                            if (array.length === quantity) {
                                items[i].style.display = 'block';
                            } else {
                                items[i].style.display = 'none';
                            };
                        }
                    }

                    $.ajax({
                        type: 'GET',
                        url: '{{route('product-index')}}/search/'+ value
                    }).done(function (callBack) {
                        var products_data = callBack;

                        for (var i = 0; i < products_data.length; i++) {
                            products_data[i].name = products_data[i].name.replace(/'/g, "\\'");
                            products_data[i].name = products_data[i].name.replace(',', " ");
                            searchAutocompleteAll.innerHTML = searchAutocompleteAll.innerHTML + '<a onclick="addItem('+products_data[i].id+')" class="search-item"><span>'+products_data[i].name+'</span></a>';
                        }
                    })
                }

                value_old = value;
            }


            document.onclick = function (event) {
                if (search !== event.target && event.target.closest('.search') === null) {
                    searchAutocomplete.classList.remove('all');
                    searchAutocomplete.classList.remove('categories');
                }
            }

            var categories = searchAutocomplete.getElementsByClassName('category');

            for (var i = 0; i < categories.length; i++) {
                var category = categories[i];
            }
        }

        function addItem(item){
            var e = jQuery.Event("keydown");
            e.which = 27; // # Some key code value
            $('#search').trigger(e);
            $('#query').val('');
            $('.search-autocomplete-all').empty();

            $.ajax({
                type: 'GET',
                url: '{{route('product-index')}}/id/'+ item
            }).done(function (callBack) {
                $('.item-list').append('<div class="item col-xs-12"><input type="hidden" value="' + callBack.id + '" name="item_id[]"><span class="col-xs-3">' + callBack.name + '</span><span class="col-xs-3">' + callBack.brand.name + '</span><span class="col-xs-3">' + callBack.product_type.name + '</span><span class="col-xs-2">' + callBack.sell_price + '</span><i class="material-icons col-xs-1" data-price="'+callBack.sell_price+'" onclick="removeItem($(this))" style="cursor: pointer">clear</i></div>');

                if($('input[name="amount"]').val() != '') {
                    var currentValue = parseInt($('input[name="amount"]').val()) + parseInt(callBack.sell_price);
                }else {
                    var currentValue = parseInt(callBack.sell_price);
                }
                $('input[name="amount"]').val( currentValue );
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            var query = document.getElementById('query');

            autocomplete(query);
        }, false);

        function removeItem(item) {
            $('input[name="amount"]').val($('input[name="amount"]').val() - item.data('price'))

            $(item).parents('.item').remove();
        }


    </script>
@endsection