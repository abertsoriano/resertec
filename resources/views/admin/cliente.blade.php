@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="POST" action="{{ route('updateInicio', $page->id) }}">

                <div class="panel panel-default">
                    <div class="panel-heading">CLIENTES</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <textarea class="form-control" name="first_title" rows="5">{{ $page->first_title }}</textarea>
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