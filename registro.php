<!doctype html>
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
        <li><a href="#registro">Register</a></li> 
        <li><a href="#index2.html">Main Page</a></li> 
      </ul>
    </div>
  </div>
</nav>
	<title>Register user</title>
	<link href="http://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet" type="text/css">
	<?php $this->load->helper('url');?>
	<?php echo link_tag("ccss/estilos/style.css"); ?>
</head>
	<body>
		<p><h1>Work with Us</h1></p>
	<section id="Parrafo">
		<form action="<?php echo base_url(); ?>index.php/loginn/insertar" method="post">
			
			<p><label>E-mail: </label><input type="text" name="email" /></p>
			<p><label>User-type:(1>Admin / 2>Employee) </label><input type="text" name="usertype" /></p>
			
			<p><label>Password: </label><input type="password" name="password" /></p>
			<p><label>Confirm password: </label><input type="password" name="confirmar" /></p>
			<p><input type="submit" name="save" value="Save"/></p>
		</form>

	</section>
	</body>