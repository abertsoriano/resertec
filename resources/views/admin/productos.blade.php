@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content-products">

            <div class="panel panel-info">
                <div class="panel-heading">SLIDERS <button class="btn btn-primary" data-toggle="modal" data-target="#modal-product-slider"><i class="fa fa-plus"></i> Nuevo Imagen para el Slider</button></div>
                <div class="panel-body data-container">
                    <div class="slider-container">
                    @foreach($sliders as $slider)
                        <div class="col-sm-3" style="margin-bottom: 15px;">
                            <div class="thumbnail">
                                <form action="{{ route("editProduct", $slider['id']) }}" method="post" enctype="multipart/form-data" class="form-edit-product-slider">
                                    <div class="form-group">
                                        <div class="content-img-prodduct" style="background-image: url('{{ asset('images/logos/' . $slider['logo_img']) }}')"></div>
                                        <input type="file" name="logo_img" class="form-control">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <button type="button" class="btn btn-danger custom-delete-btn pull-right" data-id="{{ $slider['id'] }}" data-flag="S">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">TABLA PRODUCTOS
                    <button class="btn btn-primary" title="Agregar nuevo producto" data-toggle="modal" data-target="#modal-product"><i class="fa fa-plus"></i> Nuevo Producto</button>
                </div>
                <div class="panel-body data-container">
                    <div id="table-product">
                    @foreach($tableProducts as $product)
                        <div class="col-sm-12">
                            <div class="thumbnail">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="content-img-prodduct" style="background-image: url('{{ asset('images/logos/' . $product['logo_img']) }}')"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="product-name">{{ $product['name'] }}</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="small-content product-desc ">{!! $product['desc'] !!}</div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-danger custom-delete-btn pull-right" data-id="{{ $product['id'] }}" data-flag="T">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary edit-product pull-right" data-id="{{ $product['id'] }}">
                                            <i class="fa fa-edit fa-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-product-slider">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Producto</h4>
            </div>
            <form action="{{ route("addProduct") }}" enctype="multipart/form-data" method="post" id="form-add-product">
                <div class="modal-body">
                    <input type="hidden" name="flag" value="S">
                    <div class="form-group">
                        <input type="file" name="logo_img" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-product">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route("addProduct") }}" enctype="multipart/form-data" method="post" id="form-add-product">
                <input type="hidden" name="flag" value="T">
                @include("partials.modal-product")
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-product-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#" enctype="multipart/form-data" method="post" id="form-product-edit">
                @include("partials.modal-product")
            </form>
        </div>
    </div>
</div>

<form class="hidden" id="formDeleteProduct" action="{{ route('deleteProduct', ':ID') }}" method="post"></form>
<form action="{{ route("editProduct", ':ID') }}" class="hidden" id="formEditProduct"></form>

@endsection

@section('other')
    <script src="{{ asset('js/wysihtml5x-toolbar.min.js') }}"></script>
    <script src="{{ asset('js/handlebars.runtime.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap3-wysihtml5.min.js') }}"></script>

    <script>
        var options = {
            toolbar: {
                "fa": true,
                "image": false,
                "html": true
            }
        };
        $('.wysihtml5-product').wysihtml5(options);
    </script>
@endsection