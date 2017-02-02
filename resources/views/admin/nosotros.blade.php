@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="POST" action="{{ route('updateInicio', $page->id) }}" enctype="multipart/form-data">

                <div class="panel panel-info">
                    <div class="panel-heading">Texto Nosotros</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <textarea name="second_title" class="form-control wysihtml5" rows="8">{{ $page->second_title }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">VISIÓN / MISIÓN</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_title2" value="{{ $page->first_title2 }}">
                        </div>
                        <div class="form-group">
                            <textarea name="second_title2" class="form-control wysihtml5" rows="4">{{ $page->second_title2 }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_title3" value="{{ $page->first_title3 }}">
                        </div>
                        <div class="form-group">
                            <textarea name="second_title3" class="form-control wysihtml5" rows="4">{{ $page->second_title3 }}</textarea>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('images/' . $page->banner_title_img) }}" class="img-responsive content-img-admin">
                            <input type="file" class="form-control" name="banner_title_img">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('other')
    <script src="{{ asset('js/wysihtml5x-toolbar.min.js') }}"></script>
    <script src="{{ asset('js/handlebars.runtime.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap3-wysihtml5.min.js') }}"></script>
    <script type="text/javascript">
        var options = {
            toolbar: {
                "fa": true,
                "image": false
            }
        };
        $('textarea.wysihtml5').wysihtml5(options);
    </script>
@endsection