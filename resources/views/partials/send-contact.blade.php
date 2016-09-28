<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div style="border: 2px solid #999;width: 75%margin: 20px auto">
		<ul>
			<li><strong>Nombre:</strong> {{ $nombre }}</li>
			<li><strong>Correo:</strong> {{ $correo }}</li>
			<li><strong>Celular:</strong> {{ $celular }}</li>
			<li>
				<strong>Mensaje:</strong>
				<blockquote>{{ $mensaje }}</blockquote>
			</li>
		</ul>
	</div>
</body>
</html>