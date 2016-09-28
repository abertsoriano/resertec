@extends('layouts.master_web')

@section('content')
<section class="well well1">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-6 col-xs-6 col-md-offset-1"></div>
			<div class="col-md-2 col-sm-6 col-xs-6"></div>
			<div class="col-md-2 col-sm-6 col-xs-6 wow fadeInLeft" data-wow-delay=".5s">
				<img src="images/page-1_img5.png" alt="" class="center-block" />
				<h5 class="ins_r text-center sub-title"><a href="#productos">CONTACTO</a></h5>
			</div>
			<div class="col-md-2 col-sm-6 col-xs-6"></div>
			<div class="col-md-2 col-sm-6 col-xs-6"></div>
		</div>
	</div>
</section>
<div class="map">
	<div><img src="images/adress.png" alt="" class="img-responsive center-block" /></div>
</div>
<section class="well wellnosline bg-primary"></section>
<section class="well well1">
	<div class="container">
		<div class="row">
			<p class="col-md-12 text-center txtdir1coo">CONTÁCTANOS</p>
			<div class="col-md-3 col-sm-5 wow fadeInLeft" data-wow-delay=".9s">
				<p class="txtdir1co">Resertec SRL</p>
				<p class="txtdir2">Av. San Borja Norte 1263</p>
				<p class="txtdir2co">Lima - 41 Perú</p>
				<p class="txtdir2"><i class="fa fa-phone"></i>  436 4517</p>
				<p class="txtdir2"><i class="fa fa-phone"></i>  436 6372</p>
				<p class="txtdir2"><i class="fa fa-phone"></i>  436 6013</p>
			</div>
			<div class="col-md-9 col-sm-7 wow fadeInLeft navbarbarra" data-wow-delay=".7s">
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
<section class="well wellnosline bg-primary">
</section>
@endsection