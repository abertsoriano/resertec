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
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Honeywell_Enraf_Terminal_Automation.JPG">
                                <img class="item" data-src="images/galeria/Honeywell_Enraf_Terminal_Automation.JPG" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Extra_02.jpg">
                                <img class="item" data-src="images/galeria/Extra_02.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Aberdeen.jpg">
                                <img class="item" data-src="images/galeria/Aberdeen.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/CrunchOil.jpg">
                                <img class="item" data-src="images/galeria/CrunchOil.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Eckel.png">
                                <img class="item" data-src="images/galeria/Eckel.png" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Extra_01.jpg">
                                <img class="item" data-src="images/galeria/Extra_01.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/FMC_Measurement_Solutions.jpg">
                                <img class="item" data-src="images/galeria/FMC_Measurement_Solutions.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Forum.jpg">
                                <img class="item" data-src="images/galeria/Forum.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Groth.jpg">
                                <img class="item" data-src="images/galeria/Groth.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/scully.png">
                                <img class="item" data-src="images/galeria/scully.png" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Honeywell_Enraf_Fluid_Technology.png">
                                <img class="item" data-src="images/galeria/Honeywell_Enraf_Fluid_Technology.png" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/Plidco.png">
                                <img class="item" data-src="images/galeria/Plidco.png" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/schillig.png">
                                <img class="item" data-src="images/galeria/schillig.png" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/sgi.jpg">
                                <img class="item" data-src="images/galeria/sgi.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/tdw.jpg">
                                <img class="item" data-src="images/galeria/tdw.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/wems.jpg">
                                <img class="item" data-src="images/galeria/wems.jpg" />
                            </a>
                        </div>
                        <div class="tile">
                            <a data-lightbox="gallery" class="tile-inner" href="public/images/galeria/wwt.jpg">
                                <img class="item" data-src="images/galeria/wwt.jpg" />
                            </a>
                        </div>
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