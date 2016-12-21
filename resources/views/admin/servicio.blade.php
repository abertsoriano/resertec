@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="POST" action="{{ route('updateInicio', $page->id) }}">

                <div class="panel panel-default">
                    <div class="panel-heading">CLIENTES</div>
                    <div class="panel-body data-container">
                    	@foreach(json_decode($page->second_title, true) as $file)
                        <div class="form-group">
                            <input type="text" class="form-control" name="data[]" value="{{ $file }}">
                        </div>
                        @endforeach
                    </div>
                    <div class="col-sm-12">
	                    <div class="form-group">
	                    	<button type="button" class="btn btn-default" id="addRow">Agregar</button>
	                    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection