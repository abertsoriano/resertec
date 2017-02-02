@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('partials.error_message')
            <div class="panel panel-info">
                <div class="panel-heading">Galería</div>
                <div class="panel-body">
                    <div class="row" id="content-gallery">
                        <div class="col-sm-12">
                            <form action="{{ route('updateGalery') }}" method="post" enctype="multipart/form-data">
                                <h2 style="margin-top: 0">Agregar uno nuevo</h2>
                                <div class="form-group">
                                    <input type="file" name="imagen" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                </div>
                            </form>
                            <hr>
                        </div>
                        @foreach($data as $imagen)
                        <div class="col-sm-3" style="margin-bottom: 15px;">
                            <div class="thumbnail">
                                <form action="{{ route('updateGalery') }}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="{{ $imagen->id }}">
                                    <div class="form-group">
                                        <div class="content-img" style="background-image: url('{{ asset('images/galeria/' . $imagen->imagen) }}')"></div>
                                        <input type="file" name="imagen" class="form-control">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <button type="button" class="btn btn-danger pull-right" data-id="{{ $imagen->id }}">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<form class="hidden" id="formDeleteGallery" action="{{ route('deleteGallery', ':ID') }}" method="post"></form>
@endsection