@extends('layouts.master_web')

@section('content')
<section class="well well1">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".5s">
        <img src="{{ asset('images/page-1_img1.jpg') }}" alt="" class="center-block" />
        <h5 class="ins_r text-center sub-title no-txt-shadow">NOSOTROS</h5>
      </div>
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-md-2 hidden-xs"></div>
    </div>
  </div>
</section>
<section class="well well5nosotros">
  <div class="container">
    <ul class="wow fadeInLeft" data-wow-duration="2s">
      <li class="navbarbarra col-md-12 col-sm-12 col-xs-12">
        <div>
          <p class="text-justify line-he-xl p-fix">
            {!! $page->second_title !!}
          </p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="well well2nosotros parallax text-center bg-trans bg-bottom" data-url="images/{{ $page->banner_title_img }}" data-mobile="true" data-speed="0.6">
</section>
<section class="well wellnosline bg-primary"></section>

<section class="well well5">
  <div class="container">
    <ul class="wow fadeInLeft" data-wow-duration="2s">
      <li class="col-md-6 col-sm-6 col-xs-12 border-right">
        <div>
          <h6>{{ $page->first_title2 }}</h6>
          <p class="sub-title title-sm line-he-m text-justify no-txt-shadow">
            {!! $page->second_title2 !!}
          </p>
        </div>
      </li>
      <li class="col-md-6 col-sm-6 col-xs-12">
        <div>
          <h6>{{ $page->first_title3 }}</h6>
          <p class="sub-title title-sm line-he-m text-justify no-txt-shadow">
            {!! $page->second_title3 !!}
          </p>
        </div>
      </li>
    </ul>
  </div>
</section>
@endsection