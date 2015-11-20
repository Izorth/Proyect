
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Php extends CI_Controller {
	function login($idioma=null){
		parent:: __construct();
		$this->config->set_item('language', 'spanish');// setear dinamicamente el idioma que deseamos que ejecute nuestra aplicacion
		if(!isset($_POST['maillogin'])){//si no recibimos ningun valor proveniente del formulario, significa que el usuario recien ingresa
			$this->load->view('login');//Pantalla formulario de ingreso

		}
		else{//el usuario apreto ingresar, osea q ya paso por el inicio
			$this->form_validation->set_rules('maillogin', 'e-mail','required|valid_email');//cofiguramos la valicacion con la libreria de CI
			$this->form_validation->set_rules('passwordlogin', 'password','required');
			if(($this->form_validation->run()==FALSE)){//verificar si el usuario supero la validacion
				$this->load->view('login');//en caso de q no, lo mandamos a la pantalla de login
			}
			else{//si ambos campos fueron correctamente llenados
				$this->load->model('usuarios_model');
				$ExisteUsuarioyPassword=$this->usuarios_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);//comprobamos q el usuario exista en la base de datos
				if($ExisteUsuarioyPassword){//true si existe, flase si no
					echo "Validation Ok<br><br><a href=''>Exit</a>";//si logro validar
					$this->load->view('welcome_message.php');
				}
				else{
					$data['error']="E-mail or password incorrects, try again";
					$this->load->view('login',$data);//lo enviamos a la pantalla del login
				}
			}
		}	
	}
}
?>