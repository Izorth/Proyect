<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Garp!</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="http://localhost/Codeigniter/index.php/loginn">Login</a></li>
        <li><a href="http://localhost/Codeigniter/index.php/registro">Register</a></li> 
        <li><a href="http://localhost/Codeigniter/index.php/index2">Main Page</a></li> 
      </ul>
    </div>
  </div>
</nav>
	<title>Garp Company Login </title>
	<meta charset="URF-8">
	<link href="http://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet" type="text/css">
	<?php $this->load->helper('url');?>
	<?php echo link_tag("ccss/estilos/login.css"); ?>
	<!--<link rel="stylesheet" type="text/css" href="login.css">-->
	<label><h1>Welcome to Garp!</h1></label>

</head>

<body>

	<?php echo form_open("", array("id" => "login_form")); ?>

	<label>E-mail</label>
	<input type="text" name="maillogin" value="<?= set_value('maillogin'); ?>" size="63" >
	<label>User-type (1>Admin / 2>Employee)</label>
	<input type="text" name="usertype" size="7" >
	<label>Password</label>
	<input type="password" name="passwordlogin" value="<?= set_value('passwordlogin'); ?>" size="63" >

	<input type="submit" value="Sign In" name="ingresar" id="bt_form">

	<input type="submit" value="Register" name ="registrar" id="bt_form">





	<?php echo form_close(); ?>


</body>
</html>