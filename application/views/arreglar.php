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
        <li><a href="http://localhost/Codeigniter/index.php/registro">Register</a></li> 
        <li><a href="http://localhost/Codeigniter/index.php/index2">Main Page</a></li> 
      </ul>
    </div>
  </div>
</nav>
	<title>Edit</title>
	<link href="http://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet" type="text/css">
	<?php $this->load->helper('url');?>
	<?php echo link_tag("ccss/estilos/style.css"); ?>
</head>
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>
  <div class="container">
  <body> 
  <section id="Parrafo">
<table class="table">
         <!-- <thead>
            <tr>
              <th>Usuarios</th>
              <th>Tipo</th>
              <th>contraseña </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($usuarios as $user): ?>
              <tr>
                <td><?php echo $user['Usuario'] ?></td>
                <td><?php echo $user['Usertype'] ?></td>
                <td><?php echo $user['Password'] ?></td>
                <td>
                  <div class="btn-group">
                  </div>
                </td>
              </tr>
          </tbody>
          <?php endforeach ?>-->

</table>
	
		<p><h1>Change itself</h1></p>
	<section id="Parrafo">
		<form action="<?php echo base_url(); ?>index.php/loginn/insertar" method="post">
			
			<p><label>E-mail: </label><input value="<?php echo $user['Usuario'] ?>" type="text" name="email" /></p>
			<p><label>User-type:(1=Admin / 2=Employee) </label><input value="<?php echo $user['Usertype'] ?>" type="text" name="usertype" /></p>
			
			<p><label>Password: </label><input value="<?php echo $user['Password'] ?>" type="text" name="password" /></p>
			<p><label>Confirm password: </label><input type="password" name="confirmar" /></p>
			<p><input type="submit" name="save" value="Save"/></p>
		</form>

	</section>
	</body>