@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="POST" action="{{ route('updateInicio', $page->id) }}">

                <div class="panel panel-info">
                    <div class="panel-heading">SERVICIOS</div>
                    <div class="panel-body data-container">
                    	@foreach(json_decode($page->second_title, true) as $file)
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="data[]" value="{{ $file }}">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-danger">X</button>
                                </div>
                            </div>
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