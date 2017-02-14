@extends('layouts.master_web')

@section('other-css')
<link rel="stylesheet" href="{{ asset('js/slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('js/slick/slick-theme.css') }}">
@endsection

@section('content')
<section class="well well1">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".5s">
				<img src="{{ asset('images/page-1_img3.jpg') }}" alt="" class="center-block" />
				<h5 class="ins_r text-center sub-title no-txt-shadow">PRODUCTOS</h5>
			</div>
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-md-2 hidden-xs"></div>
		</div>
	</div>
</section>
<section class="well" data-mobile="true" data-speed="0.6">
	<div class="container">
		<div id="logo-products">
			@foreach($sliders as $slider)
			<div>
				<a href="{{ $slider['desc']}}" target="_blank" title="Ir a {{ $slider['desc']}}">
					<img src="{{ asset('images/logos/' . $slider['logo_img']) }}" alt="{{ $slider['name']}}" class="center-block">
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section class="well relative">
	<div class="product-title">
		<div class="product-middle-bar"></div>
		<h3 class="text-center">LISTA DE REPRESENTADAS</h3>
	</div>
	<div class="container table-products">
		<div class="table-responsive">
			<table class="table">
				<tbody>
				@foreach($tableProducts as $product)
					<tr>
						<td colspan="3" class="no-padding">
							<div class="table-product-decorate"></div>
						</td>
					</tr>
					<tr class="xfa">
						<td class="middle" style="width: 28%"><img src="{{ asset('images/logos/' . $product['logo_img']) }}" alt="FMC Tecnologies" class="img-responsive"></td>
						<td class="middle hidden-xs" style="width: 22%">
							<span>{{ $product['name'] }}</span>
						</td>
						<td class="table-content middle" style="width: 50%">
							{!! $product['desc'] !!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection

@section('other-script')
<script src="{{ asset('js/slick/slick.min.js') }}"></script>
@endsection