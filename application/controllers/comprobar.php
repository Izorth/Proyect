<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(isset($_POST['adm']))
	$this->load->view('borrar');
else if(isset($_POST['main']))
	$this->load->view('index2.html');

?>	