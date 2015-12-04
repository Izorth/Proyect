<!doctype html>
<html>
<head>
	<title>Sistema de login </title>
	<meta charset="URF-8">
	<link href="http://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet" type="text/css">
	<?php $this->load->helper('url');?>
	<?php echo link_tag("ccss/estilos/login.css"); ?>
	<!--<link rel="stylesheet" type="text/css" href="login.css">-->

</head>

<body>

	<?php echo form_open("", array("id" => "login_form")); ?>

	<label>Usuarios</label>
	<input type="text" name="usuario" class="input">
	<label>Contraseña</label>
	<input type="password" name="pass" class="input">

	<input type="submit" value="Ingresar" id="bt_form">



	<?php echo form_close(); ?>


</body>
</html>