@extends('layouts.master_web')

@section('content')
<section class="well well1">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".5s">
				<img src="{{ asset('images/page-1_img2.jpg') }}" alt="" class="center-block" />
				<h5 class="ins_r text-center sub-title no-txt-shadow">CLIENTES</h5>
			</div>
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-md-2 hidden-xs"></div>
		</div>
	</div>
</section>
<section class="well well5nosotros">
	<div class="container">
		<div class="wow fadeInLeft" data-wow-duration="2s">
			<div class="navbarbarra col-sm-12 col-md-10 col-md-offset-1">
				<ul class="list-unstyled txtpprod list-services">
					<li>
						<p>{!! $page->first_title !!}</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="well wellnosline bg-primary">
</section>
<section class="well"  data-mobile="true" data-speed="0.6">
	<div class="container">
		<div class="col-sm-12 col-md-10 col-md-offset-1">
			<div class="row clientes">
				<div class="col-sm-4">
					<img src="{{ asset('images/clientes/mini_petroperu.png') }}" class="img-responsive center-block">
				</div>
				<div class="col-sm-4">
					<img src="{{ asset('images/clientes/mini_repsol.jpg') }}" class="img-responsive center-block">
				</div>
				<div class="col-sm-4">
					<img src="{{ asset('images/clientes/mini_terminales_peru.png') }}" class="img-responsive center-block">
				</div>
				<div class="col-sm-4">
					<img src="{{ asset('images/clientes/mini_cerro_verde.png') }}" class="img-responsive center-block">
				</div>
				<div class="col-sm-4">
					<img src="{{ asset('images/clientes/mini_pluspetrol.jpg') }}" class="img-responsive center-block">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="well wellnosline bg-primary">
</section>
@endsection