<!doctype html>
<html>
<head>
	<title>Registro de usuarios</title>
	<?php $this->load->helper('url');?>
	<?php echo link_tag("ccss/estilos/style.css"); ?>
</head>
	<body>
	<section id="Parrafo">
		<form action="" metho="post">
			<p><label>Nombre: </label><input type="text" name="nombre"/></p>
			<p><label>Edad:</label><input type="text" name="edad"/></p>
			<p><label>Contraseña: </label><input type="password" name="contraseña"/></p>
			<p><label>Confirmar contraseña: </label><input type="password" name="confirmar"/></p>
			<p><input type="submit" name="guardar" value="Guardar"/></p>
		</form>

	</section>
	</body>