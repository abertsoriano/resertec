@extends('layouts.master_web')

@section('content')
<section class="well well1">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 hidden-xs"></div>
            <div class="col-sm-2 hidden-xs"></div>
            <div class="col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".5s">
                <img src="{{ asset('images/icon_galeria.png') }}" alt="" class="center-block" />
                <h5 class="ins_r text-center sub-title no-txt-shadow">GALERÍA</h5>
            </div>
            <div class="col-sm-2 hidden-xs"></div>
            <div class="col-md-2 hidden-xs"></div>
        </div>
    </div>
</section>
<section class="well">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="final-tiles-gallery effect-dezoom effect-fade-out caption-top" style="border: red solid 10px">
                    <div class="ftg-items">
                        @foreach($galeries as $galery)
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/{{ $galery->imagen }}">
                                <img class="item" data-src="images/galeria/{{ $galery->imagen }}" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('other-script')
<script src="js/plugins.js"></script>
<script>
    $(".final-tiles-gallery").finalTilesGallery({
        gridSize: 50
    });
</script>
@endsection