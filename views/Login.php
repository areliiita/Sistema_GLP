<?php
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login del Sistema  de Gestión de libros Parroquiales</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
<link rel="shortcut icon" type="../image/x-icon" href="./assets/img/icono.png">
</head>
<body class="cover" style="background-image: url(./assets/img/fondo.jpeg);">
	<form action="?c=Login&a=Entrar"  class="full-box logInForm" method="POST" enctype="multipart/form-data">
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Inicia sesión</p>

		<div class="form-group label-floating">
		  <label class="control-label" for="txtEmail">E-mail</label>
		  <input class="form-control" id="txtEmail" name="txtEmail" type="email" autofocus="required="required >
		  <p class="help-block">Escribe tú E-mail</p>
		</div>

		<div class="form-group label-floating">
		  <label class="control-label" for="txtContrasena">Contraseña</label>
		  <input class="form-control" id="txtContrasena" name="txtContrasena" type="password"   autofocus required >
		  <p class="help-block">Escribe tú contraseña</p>
		</div>

		<div class="form-group text-center">
			<button type="submit"  class="btn btn-raised btn-info"> Iniciar sesión</button>
		</div>
	</form>
	
</body>
</html>