@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="POST" action="{{ route('updateInicio', $page->id) }}">

                <div class="panel panel-info">
                    <div class="panel-heading">CLIENTES</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <textarea class="form-control wysihtml5" name="first_title" rows="5">{{ $page->first_title }}</textarea>
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