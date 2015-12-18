
  <script src="js/jquery.min.map"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/npm.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="font/glyphicon-halflings-regular.eot"></script>
  <script src="font/glyphicon-halflings-regular.svg"></script>
  <script src="font/glyphicon-halflings-regular.ttf"></script>
  <script src="font/glyphicon-halflings-regular.woff"></script>
  <script src="font/glyphicon-halflings-regular.woff2"></script>
  <script src="css/bootstrap-theme.css"></script>
  <script src="css/jquery.mobile.custom.structure.css"></script>
  <script src="css/jquery.mobile.custom.structure.min.css"></script>
  <script src="css/jquery.mobile.custom.theme.css"></script>
  <script src="css/jquery.mobile.custom.theme.min.css"></script>
  <script src="css/bootstrap-theme.css.map"></script>
  <script src="css/bootstrap-theme.min.css"></script>
  <script src="css/bootstrap-theme.min.css.map"></script>
  <script src="css/bootstrap.css"></script>
  <script src="css/bootstrap.css.map"></script>
  <script src="css/bootstrap.min.css"></script>
  <script src="css/bootstrap.min.css.map"></script>
  <script src="css/bootstrap-theme.css"></script>
  

  <?php echo link_tag("ccss/estilos/style.css"); ?>
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
<link href="http://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet" type="text/css">
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
          <thead>
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
          <?php endforeach ?>

</table>
		<form action="<?php echo base_url(); ?>index.php/loginn/eliminar" method="post">
			
			
			<p><label>Enter User-Type to delete: </label><input type="text" name="email" size="20" /></p>
     
			
			
			
			<p><input type="submit" name="delete" value="Complete"/></p>
		</form>


        
</body>
</section>      
</div>  