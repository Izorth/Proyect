<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginn extends CI_Controller{

	function __construct(){
		parent:: __construct();
	}


	public function insertar(){
		$data1= array(
			'Usuario'=>$this->input->post('email'),
			'Usertype'=>$this->input->post('usertype'),
			'Password'=>$this->input->post('password'));
		$this->load->model('usuarios_model');
		if($this->usuarios_model->AddUsuario($data1))
			redirect('loginn');
	}
public function comprobar(){
	if(isset($_POST['adm']))
	$this->load->view('borrar');
else if(isset($_POST['main']))
	$this->load->view('index2.html');
else if(isset($_POST['edit']))
	$this->load->view('edit');
else if(isset($_POST['show']))
	$this->load->view('mostrar');
}
	public function eliminar(){
		$email=$_POST['maillogin'];
		
      $this->load->model('usuarios_model');
     if($this->usuarios_model->eliminar2($email))
      redirect('loginn');
   }

   public function mostrar(){
   	$email=$_POST['email'];
   		$data1= array();
   		$this->db->like('Usuario', $email);
   		$query = $this->db->get('usuarios');
   		if($query->num_rows() > 0 )
        {
        	foreach ($query->result_array() as $row ) {
        		$data1[] = $row;
        	}
        	
            //return $query->result();
        }
        $data['usuarios'] = $data1;
        if(isset($_POST['edit']))
        	$this->load->view('arreglar', $data);
        else
        $this->load->view('vista1', $data );

   }

   public function mostrar2(){
   	
   		$data2=array();
   		//$this->db->like('usuarios');
   		$query = $this->db->get('usuarios');
   		if($query->num_rows() > 0 )
        {
        	foreach ($query->result_array() as $row ) {
        		$data2[] = $row;
        	}
        	
            //return $query->result();
        }
        $data3['usuarios']=$data2;
         if(isset($_POST['show1']))
        	$this->load->view('ver', $data3);
        else
        $this->load->view('loginn');
        

   }

	function index(){
	
		if(!isset($_POST['maillogin'])){//si no recibimos ningun valor proveniente del formulario, significa que el usuario recien ingresa

			$this->load->view('loginn');//Pantalla formulario de ingreso

		}else if (isset($_POST['registrar'])) {
			$this->load->view('registro');
			
		}else{//el usuario apreto ingresar, osea q ya paso por el inicio
			$this->form_validation->set_rules('maillogin', 'e-mail','required|valid_email');//cofiguramos la valicacion con la libreria de CI
			$this->form_validation->set_rules('passwordlogin', 'password','required');
			if(($this->form_validation->run()==FALSE)){//verificar si el usuario supero la validacion
				$this->load->view('loginn');//en caso de q no, lo mandamos a la pantalla de login
			}else{//si ambos campos fueron correctamente llenados
				$this->load->model('usuarios_model');
				$ExisteUsuarioyPassword=$this->usuarios_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);//comprobamos q el usuario exista en la base de datos
				$this->load->model('usuarios_model');
					
					
				if($ExisteUsuarioyPassword && ($_POST['usertype']=='1')){//true si existe, flase si no
					echo "Validation Ok<br><br><a href=''>Exit</a>";//si logro validar
					$this->load->view('where');
					
					
					
				}else
					if($ExisteUsuarioyPassword && ($_POST['usertype']=='2')){//true si existe, flase si no
					echo "Validation Ok<br><br><a href=''>Exit</a>";//si logro validar
					$this->load->view('index2.html');
					
				}
				else{
					echo "E-mail or password incorrects, try again";
					$data['error']="E-mail or password incorrects, try again";
					$this->load->view('loginn',$data);//lo enviamos a la pantalla del login
					
				}
			}
		}
	}	
}

?>	