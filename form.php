<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilo-form.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formularios</title>
</head>
<body>
		<nav>
			<h2>Club Deportivo Metropolitano</h2>
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="login.html">Ingrese</a></li>
				<li><a href="calendar/calendario.php">Partidos</a></li>
				<li><a href="acerca.html">Sobre Nosotros</a></li>
			</ul>
		</nav>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="register.php" class="formulario" name="formulario_registro" method="POST">
				<div>
					<div class="input-group">
						<input type="text" id="nombre" name="nombre">
						<label class="label" for="nombre">Nombre:</label>
					</div>
					<div class="input-group">
						<input type="email" id="correo" name="correo">
						<label class="label" for="correo">Correo:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass" name="pass">
						<label class="label" for="pass">Contraseña:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass2" name="pass2">
						<label class="label" for="pass2">Repetir Contraseña:</label>
					</div>
					<input type="submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>
	<!--<script src="js/formulario.js"></script>-->
	<footer> &copy; Todos los Derechos Reservados </footer>

</body>
</html>