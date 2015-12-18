<!doctype html>
<html>
<head>
	<title>Registro de usuarios</title>
	<link href="http://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet" type="text/css">
	<?php $this->load->helper('url');?>
	<?php echo link_tag("ccss/estilos/style.css"); ?>
</head>
	<body>
		<p><h1>Delete Users</h1></p>
	<section id="Parrafo">
		<form action="<?php echo base_url(); ?>index.php/loginn/eliminar" method="post">
			
			<p><label>E-mail: </label><input type="text" name="email" /></p>
			<p><label>User-type:(1>Admin / 2>Employee) </label><input type="text" name="usertype" /></p>
			
			
			<p><input type="submit" name="delete" value="Complete"/></p>
		</form>

	</section>
	</body>