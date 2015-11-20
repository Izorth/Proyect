<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Garp Company</title>

	<style type="text/css">

	::selection { background-color: #0613AB; color: white; }
	::-moz-selection { background-color: #0613AB; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #E81414;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 18px 17px 12px 17px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Bienvenido a Garp Company!</h1><br>

	<div id="body">
		<p>Garp Company es una empresa dedicada al desarrollo de aplicaciones moviles y especializada en video juegos. Nació esta empresa con la idea de incrementar la entretención. Si bien ya hay varias empresas dedicadas a la creación de juegos virtuales, simplemente nuetra idea es seguir innovando en juegos y dar a conocer a todo el publico apasionado a los videogames, nuestras visiones de diversión, los invitamos a ser parte de este viaje</p>

		<p>Comprometido con el labor de masificar la diversión y proporcionar herramientas utiles para los usuarios, ya sean:</p>
		<code><p>>Desarrollo de videojuegos</p>
			<p>>Soporte de motores gráficos</p>
			<p>>Realización virtual de juegos(ologramas)</p>
			<p>>Computadores dedicados a probar versiones alfas y betas</p></code>

		<p>Contamos con localidades de trabajo a lo largo de todo el mundo</p>
		<code><p>>New York</p>
			<p>>New York</p>
			<p>>Paris</p></code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Pagina cargada en <strong>{elapsed_time}</strong> segundos. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>