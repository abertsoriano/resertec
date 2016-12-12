@extends('layouts.master_web')

@section('content')
<section class="well well1">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".5s">
				<img src="images/page-1_img5.jpg" alt="" class="center-block" />
				<h5 class="ins_r text-center sub-title no-txt-shadow">CONTACTO</h5>
			</div>
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-md-2 hidden-xs"></div>
		</div>
	</div>
</section>
<section class="well well1">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInLeft" data-wow-delay=".9s">
				<p class="col-md-12 text-center txtdir1coo">CONTÁCTANOS</p>
			</div>
			<div class="col-md-3 col-sm-4 wow fadeInLeft" data-wow-delay=".9s">
				<p class="txtdir1co">Resertec SRL</p>
				<p class="txtdir2">Av. San Borja Norte 1263</p>
				<p class="txtdir2co">Lima - 41 Perú</p>
				<p class="txtdir2"><i class="fa fa-phone"></i>  436 4517</p>
				<p class="txtdir2"><i class="fa fa-phone"></i>  436 6372</p>
				<p class="txtdir2"><i class="fa fa-phone"></i>  436 6013</p>
			</div>
			<div class="col-md-9 col-sm-8 wow fadeInLeft navbarbarra" data-wow-delay=".7s">
				<form id="frm-contact">
					<div class="col-sm-6">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" class="form-control" id="nombre" name="nombre" required />
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" size="50" name="correo" required />
							</div>
							<div class="form-group">
								<label for="celular">Celular</label>
								<input type="text" id="celular" class="form-control" name="celular" />
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<textarea class="form-control" rows="9" placeholder="Mensaje..." name="mensaje"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input class="btn btn-danger fix-padding-btn center-block" type="submit" value="Enviar" />
						</div>
					</div>
					<div class="col-sm-12">
						<div class="alert alert-success hidden" id="msg-alert">
							<span></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="well wellnosline bg-primary">  </section>
<div class="map">
	<div><img src="{{ asset('images/adress.png') }}" alt="" class="img-responsive center-block" /></div>
</div>
<section class="well wellnosline bg-primary"></section>
@endsection