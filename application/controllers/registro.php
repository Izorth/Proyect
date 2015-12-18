
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registro extends CI_Controller {

	function __construct(){
		parent:: __construct();
	}
	function index(){
		
		//$this->config->set_item('language', 'spanish');// setear dinamicamente el idioma que deseamos que ejecute nuestra aplicacion
		//si no recibimos ningun valor proveniente del formulario, significa que el usuario recien ingresa
			$this->load->view('registro');//Pantalla formulario de ingreso

		
		/*if ($_POST[registrar]) {
			$this->load->view('registro.php');
		}*/	
	
}
}

?>